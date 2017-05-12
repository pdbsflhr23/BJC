@extends('layout.admin')

@section('content')

<div class="container-fluid">
    <!-- START CONTAINER -->
    <div class="row" style="align-content: center !important;">
        <!-- START CONTENT ROW -->
        <div class="col-md-12 col-xs-10" >

			<div class="widget widget-default">
                <header class="widget-header">
					<h2 class="page-header-heading">
						<span class="fa fa-pencil"></span>
						Edit Complaint
					</h2>
                </header>
                <div class="widget-body">
                    <div class="widget-body">
                        <form method="POST" action="{{ url('complaint/update') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $complaint->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="">SBT Code</label>
                                    <input name="sbtcode" id="sbtcode" class="form-control input-sm" placeholder="SBT Code" type="text" value="{{$complaint->sbt}}">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="">Contact Person</label><br>
                                    <input name="person" id="person" class="form-control input-sm" placeholder="Contact Person" type="text" value="{{$complaint->contact_person}}">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="">Contact Number</label><br>
                                    <input name="number" id="number" class="form-control input-sm" placeholder="Contact Number" type="number" value="{{$complaint->contact_number}}">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="">Job Nature Details</label><br>
                                    <input name="job_nature_details" id="job_nature_details" class="form-control input-sm" placeholder="Contact Number" type="text" value="{{$complaint->job_nature_details}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Complaint</label><br>
                                    <textarea name="complaint" id="complaint" class="form-control" placeholder="Complaint">{{ $complaint->query }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Contact Email</label><br>
                                    <input name="email" id="email" class="form-control input-sm" placeholder="Contact Email" type="email" value="{{$complaint->contact_email}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Location</label><br>
                                    <input name="location" id="location" class="form-control input-sm" placeholder="Location" type="text" value="{{$complaint->location}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Address</label><br>
                                    <input name="address" id="address" class="form-control input-sm" placeholder="Address" type="text" value="{{$complaint->address}}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="password">Complaint Type</label><br>
                                    <select name="com_type" id="com_type" class="form-control input-sm">
                                        <option value="">Select Job Type</option>
                                        <option value="Normal" {{ ($complaint->query_type == 'Normal' ? 'selected' : '') }}>Normal</option>
                                        <option value="High" {{ ($complaint->query_type == 'High' ? 'selected' : '') }}>High</option>
                                        <option value="Urgent" {{ ($complaint->query_type == 'Urgent' ? 'selected' : '') }}>Urgent</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="password">Job Nature</label><br>
                                    <select name="job_nature" id="job_nature" class="form-control input-sm">
                                        <option value="" >Select Job Type</option>
                                        @foreach($jobs as $job)
                                            <option value="{{ $job->id }}" {{ ($complaint->job_nature == $job->id ? 'selected' : '') }}>{{ $job->job }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="username">Status</label><br>
                                    <select name="status" id="status" class="form-control input-sm">
                                        <option value="" >Select Job Status</option>
                                        <option value="Forwarded" {{ ($complaint->status == 'Forwarded' ? 'selected' : '') }}>Forward</option>
                                        <option value="InProcess" {{ ($complaint->status == 'InProcess' ? 'selected' : '') }}>In Process</option>
                                        <option value="Solved" {{ ($complaint->status == 'Solved' ? 'selected' : '') }}>Solved</option>
                                    </select>
                                </div>
                                <div class="form-group" id="on_forward">
                                    <label for="username">Forward to</label><br>
                                    <select name="forwarded_to" id="forwarded_to" class="form-control input-sm">
                                        <option value="" >Select Forward to</option>
                                        @foreach($departments as $department)
                                            <option value="{{ $department->department }}" {{ ($complaint->forwarded_to == $department->department ? 'selected' : '') }}>{{ $department->department }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" id="on_solved">
                                    <label for="password">Solved By</label><br>
                                    <input name="solved" id="solved" class="form-control input-sm" placeholder="Solved by" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right">Update Complaint</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
        <!-- END CONTENT ROW -->
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#on_forward').hide();
            $('#on_solved').hide();
            if($('#status :selected').val() == 'Forwarded'){
                $('#on_forward').show();
            }
            if($('#status :selected').val() == 'Solved'){
                $('#on_solved').show();
            }
            $('#status').change(function(){
                if($(this).val() == 'Forwarded'){
                    $('#on_solved').hide();
                    $('#on_solved').val('');
                    $('#on_forward').show();
                }
                if($(this).val() == 'InProcess'){
                    $('#on_forward').hide();
                    $('#on_forward').val('');
                    $('#on_solved').hide();
                    $('#on_solved').val('');
                }
                if($(this).val() == 'Solved'){
                    $('#on_forward').hide();
                    $('#on_forward').val('');
                    $('#on_solved').show();
                }
            });

        });

    </script>
@endsection