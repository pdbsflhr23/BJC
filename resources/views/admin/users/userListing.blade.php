@extends('layout.admin')

@section('content')
    <header class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="page-header-heading"><span class="typcn typcn-th-small page-header-heading-icon"></span> Users</h1>
                    <p class="page-header-description">List of users</p>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <a href="{{ URL ('users/create') }}" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Create User</a>
            </div>
            <div class="col-md-12 col-xs-12">
                <div class="widget widget-default">
                    <header class="widget-header">
                        All Users
                    </header>
                    <div class="widget-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{'', $count = 1}}
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$count}}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                                </tr>
                                {{'', $count++ }}
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        @include('admin.partials.footer')
    </div>
@endsection