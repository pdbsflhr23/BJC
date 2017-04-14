@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="jumbotron">
                <h1 class="text-danger"> <span class="fa fa-warning"></span> Not Authorized</h1>
                <p>Oops, You don't have rights to access this link.</p>
                <p><a class="btn btn-primary btn-lg" href="{{ route('admin.dashboard') }}" role="button">Go to your dashboard</a></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection