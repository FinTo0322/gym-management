@extends('layouts/layout')

@section('home')
<div>
                <h1 class="text-center mt-5">Members</h1>
                    <a href="#" class="btn" style="margin-left: 15em;">➕ New member</a>
                        <div class="card shadow w-75 mx-auto">
                            <table class="table table-stripped justify-content-center">
                                <thead>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Membership Type</th>
                                    <th scope="col">Membership Expiration</th>
                                    <th scope="col">Trainer</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">ewan</th>
                                        <th>ewan@ewan.ko</th>
                                        <th>tambay premium</th>
                                        <th>march 13 2040</th>
                                        <th>mama mo</th>
                                        <th>
                                        <a href="#" class="btn">📝</a>
                                        <a href="#" class="btn">🗑️</a>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
           </div>
@endsection