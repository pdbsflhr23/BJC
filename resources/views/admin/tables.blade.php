@extends('layout.admin')

@section('content')
<header class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header-heading"><span class="typcn typcn-th-small page-header-heading-icon"></span> Tables</h1>
                <p class="page-header-description">Bootstrap comes with multiple useful table variants.</p>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">

    <div class="row">

        <div class="col-md-6 col-xs-12">
            <div class="widget widget-default">
                <header class="widget-header">
                    Basic
                </header>
                <div class="widget-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>john.doe@example.com</td>
                                <td>John Doe</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>jeff.mann@example.com</td>
                                <td>Jeff Mann</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>bob.jim@example.com</td>
                                <td>Bob Jim</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>matt.vera@example.com</td>
                                <td>Matt Vera</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="widget widget-default">
                <header class="widget-header">
                    Bordered
                </header>
                <div class="widget-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>john.doe@example.com</td>
                                <td>John Doe</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>jeff.mann@example.com</td>
                                <td>Jeff Mann</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>bob.jim@example.com</td>
                                <td>Bob Jim</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>matt.vera@example.com</td>
                                <td>Matt Vera</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="widget widget-default">
                <header class="widget-header">
                    Condensed
                </header>
                <div class="widget-body">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>john.doe@example.com</td>
                                <td>John Doe</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>jeff.mann@example.com</td>
                                <td>Jeff Mann</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>bob.jim@example.com</td>
                                <td>Bob Jim</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>matt.vera@example.com</td>
                                <td>Matt Vera</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="widget widget-default">
                <header class="widget-header">
                    Responsive
                </header>
                <div class="widget-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>john.doe@example.com</td>
                                <td>John Doe</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>jeff.mann@example.com</td>
                                <td>Jeff Mann</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>bob.jim@example.com</td>
                                <td>Bob Jim</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>matt.vera@example.com</td>
                                <td>Matt Vera</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xs-12">
        
            <div class="widget widget-default">
                <header class="widget-header">
                    Striped
                </header>
                <div class="widget-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>john.doe@example.com</td>
                                <td>John Doe</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>jeff.mann@example.com</td>
                                <td>Jeff Mann</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>bob.jim@example.com</td>
                                <td>Bob Jim</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>matt.vera@example.com</td>
                                <td>Matt Vera</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="widget widget-default">
                <header class="widget-header">
                    Hover
                </header>
                <div class="widget-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>john.doe@example.com</td>
                                <td>John Doe</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>jeff.mann@example.com</td>
                                <td>Jeff Mann</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>bob.jim@example.com</td>
                                <td>Bob Jim</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>matt.vera@example.com</td>
                                <td>Matt Vera</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button> <div class="btn btn-transparent btn-transparent-danger btn-xs"><span class="fa fa-trash-o"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="widget widget-default">
                <header class="widget-header">
                    Context Utilities
                </header>
                <div class="widget-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>john.doe@example.com</td>
                                <td>John Doe</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr class="active">
                                <th scope="row">2</th>
                                <td>jeff.mann@example.com</td>
                                <td>Jeff Mann</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>bob.jim@example.com</td>
                                <td>Bob Jim</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr class="success">
                                <th scope="row">4</th>
                                <td>matt.vera@example.com</td>
                                <td>Matt Vera</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>jack.rye@example.com</td>
                                <td>Jack Rye</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr class="danger">
                                <th scope="row">6</th>
                                <td>paul.well@example.com</td>
                                <td>Paul Well</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>jackie.webb@example.com</td>
                                <td>Jackie Webb</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr class="info">
                                <th scope="row">8</th>
                                <td>jill.franco@example.com</td>
                                <td>Jill Franco</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>jessica.mabe@example.com</td>
                                <td>Jessica Mabe</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr class="warning">
                                <th scope="row">10</th>
                                <td>gemma.bale@example.com</td>
                                <td>Gemma Bale</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>polly.fawn@example.com</td>
                                <td>Polly Fawn</td>
                                <td class="text-right"><button class="btn btn-transparent btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @include('admin.partials.footer')
</div>
@endsection