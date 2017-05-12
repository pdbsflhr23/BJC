@extends('layout.admin')

@section('content')
    <div class="container-fluid">
        <!-- START CONTAINER -->
        <div class="row" >
            <!-- START CONTENT ROW -->
            <div class="col-xs-12">
                <div class="widget widget-default">
                    <header class="widget-header">
                        <h3 class="page-header-heading">
                            <span class="typcn typcn-document-add page-header-heading-icon"></span>
                                Active Complaints
                            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Node</button>
                        </h3>
                    </header>
                    <div class="widget-body">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Complaint #</th>
                                <th>SBT</th>
                                <th>Contact #</th>
                                <th>Job Nature</th>
                                <th>Pending In</th>
                                <th>Date and Time</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{'', $count = 1  }}
                            @foreach($complaints as $complaint)
                                <tr>
                                    <th scope="row">{{ $count }}</th>
                                    <td>{{ $complaint->job_number }}</td>
                                    <td>{{ $complaint->sbt }}</td>
                                    <td>{{ $complaint->contact_number }}</td>
                                    <td>@foreach($complaint->job as $job){{ $job->job }} @endforeach</td>
                                    <td>{{ $complaint->forwarded_to }}</td>
                                    <td>{{ date('d-m-Y', strtotime($complaint->date_time)) }}</td>
                                    <td class="text-right">
                                        <button class="btn btn-transparent btn-transparent-primary btn-xs"><span class="fa fa-reorder"></span> <span class="hidden-xs hidden-sm hidden-md">Details</span></button>
                                        <a href="{{ url('complaint/edit/'.$complaint->id) }}" class="btn btn-transparent btn-transparent-purple btn-xs"><span class="fa fa-pencil"></span> <span class="hidden-xs hidden-sm hidden-md">Edit</span></a>
                                        <button class="btn  btn-transparent btn-transparent-danger btn-xs del-me" data-toggle="modal" data-target="#deleteModal" id="{{ $complaint->id }}"><span class="fa fa-trash"></span> <span class="hidden-xs hidden-sm hidden-md">Delete</span></button>

                                    </td>
                                </tr>
                                {{'', $count++ }}
                            @endforeach
                            </tbody>
                        </table>
                        <ul class="pagination pull-right">
                            <li>{{ $complaints->links() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT ROW -->
    </div>
    <!-- END CONTAINER -->
    <!-- DELETE NODE MODEL -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center modal-lg">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Delete Complaint</h4>
                        </div>
                        <div class="modal-body">
                            <div id="alert_del"></div>
                            <p>Are you sure to delete?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" id="delete-me">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END ADD NODE MODEL -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            //////////////////////////////////// DELETE DATA //////////////////////////////////////
            $('.del-me').on('click', function(){
                var id = $(this).attr("id");
                $('#delete-me').off('click').on('click', function () {
                    setDel(id);
                });
            });
        });

        //////////////////////////////////// GET EDIT DATA //////////////////////////////////////
        function setDel(id){
            $.ajax({
                headers: {'X-CSRF-Token': $('input[name="_token"]').val()},
                type: "POST",
                url: "{{ url('complaint/delete') }}/"+id,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(data){
                },
                complete: function(){
                    $('#alert_del').empty();
                    $('#alert_del').append('<div class="alert alert-success">Node has been deleted successfully!</div>');
                }
            });
        }

    </script>
@endsection