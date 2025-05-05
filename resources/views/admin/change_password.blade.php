@extends('admin.layouts.layout')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="colEmpty">
                    <h3 class="page-title">Change Password</h3>
                    <ul class="breadcrumb">
                        <li class=""><a href="{{route('admin_home')}}">Dashboard</a>
                        </li> /
                        <li class="active">Change Password</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Password</h4>
                        <form method="POST" action="{{route('password-change')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="" id="" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" value="" id="" name="password">
                                    </div>
                                    <div class="right-align mt-4">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
