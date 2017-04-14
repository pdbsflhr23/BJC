@extends('layout.admin')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert"> {{ session('status') }} </div>
    @endif
    <header class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="page-header-heading"><span class="typcn typcn-th-small page-header-heading-icon"></span> Users Managment</h1>
                    <p class="page-header-description">New User</p>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-offset-3  col-md-6 col-xs-12">
            <h1 class="log-in-title">Create<br><small>New Account</small></h1>
                <form class="form-horizontal" role="form" method="POST" action="{{ URL('users/store') }}">
                    {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control input-lg" name="email" id="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <select class="form-control input-lg" name="role">
                        <option value="0" selected>Select Role</option>
                        @foreach($roles as $user)
                            <option value="{{ $user->id }}">{{ $user->display_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Account Password (min 6 chars)">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-lg" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-transparent btn-lg btn-transparent-primary btn-block">
                        Register
                    </button>
                </div>

            </form>
                </div>
    </div>
    </div>
@endsection