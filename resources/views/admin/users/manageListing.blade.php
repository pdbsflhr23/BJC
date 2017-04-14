@extends('layout.admin')

@section('content')
    <header class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="page-header-heading"><span class="typcn typcn-th-small page-header-heading-icon"></span> Roles Managment</h1>
                    <p class="page-header-description">List of Roles and Permissions</p>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-offset-3  col-md-6 col-xs-12">
                <div class="widget widget-default">
                    <header class="widget-header">
                        Basic
                    </header>
                    <div class="widget-body">
                        <div class="form-group">
                            <label>Select Role</label>
                            <select class="form-control">
                                <option value="0" selected>Select Role</option>
                                @foreach($roles as $user)
                                    <option value="{{ $user->id }}">{{ $user->display_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="clearfix">
                            <input type="checkbox"  data-icheck>
                            <label for="remember_me_1" class="icheck-label">
                                Create Post
                            </label>
                        </div>
                    </div>
                </div>

            </div>
    </div>
        @include('admin.partials.footer')
    </div>
@endsection