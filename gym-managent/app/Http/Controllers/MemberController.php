<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function home(){
        return view('member.home',compact('home'));
    }

    public function create(){
        return view('member.create');
    }

    public function store(Request $request){
       $request->validate([
        'name' => 'required',
        'email' => 'required',
        'membership_type' => 'required',
        'membership_expiration' => 'required'
       ]);

       Member::create($request->all());
       return view('member.create');
        }

    public function update(Request $request, Member $member){
        $request->validate([
            'name' => 'required',
        'email' => 'required',
        'membership_type' => 'required',
        'membership_expiration' => 'required',
        'trainer' => 'required'
        ]);

        return redirect()->route('member.index')->with('Success','Member has been added!');
    }

    public function destroy(Member $member){
        $member->delete();

        return redirect()->route('member.index')->with('success','Member has been deleted!');

    }
}
