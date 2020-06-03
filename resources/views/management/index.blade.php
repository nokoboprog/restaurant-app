@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action" href="">
                        <i class="fas fa-align-justify"></i> Category</a>
                    <a class="list-group-item list-group-item-action" href="">
                        <i class="fas fa-hamburger"></i> Menu</a>
                    <a class="list-group-item list-group-item-action" href="">
                        <i class="fas fa-chair"></i> Table</a>
                    <a class="list-group-item list-group-item-action" href="">
                        <i class="fas fa-users-cog"></i> User</a>
                </div>
            </div>
            <div class="col-md-8">     
            </div>
        </div>
    </div>
@endsection
