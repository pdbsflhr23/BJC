<?php

namespace App\Http\Controllers\complaints;

use App\MODEL\Complaint;
use App\MODEL\History;
use App\MODEL\Job;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * ========================================================================================================= *
     *                                   View of New Complaint
     * ========================================================================================================= *
     */

    public function active()
    {
        $complaints = Complaint::orderBy('id', 'desc')->paginate(20);
        return view('template\complaints\active_complaint', compact('complaints'));
    }
    /**
     * ========================================================================================================= *
     *                                   View of New Complaint
     * ========================================================================================================= *
     */

    public function add()
    {
        $jobs = Job::all();
        $departments = User::select('department')->get();
        return view('template\complaints\new_complaint', compact('jobs', 'departments'));
    }

    /**
     * ========================================================================================================= *
     *                                   View of Edit Complaint
     * ========================================================================================================= *
     */

    public function edit($id)
    {
        $jobs = Job::all();
        $complaint = Complaint::findOrFail($id);
        $departments = User::select('department')->get();
        return view('template\complaints\edit_complaint', compact('jobs', 'departments', 'complaint'));
    }

    /**
     * ========================================================================================================= *
     *                                   Add of New Complaint
     * ========================================================================================================= *
     */

    public function store(Request $request)
    {
        $last = Complaint::orderBy('id', 'desc')->select('id')->first();
        $job_number = date('ym')."7070-".($last->id + 1);
        $forwarded = (!empty($request->forwarded_to) ? $request->forwarded_to : Auth::user()->username);

        $complaint = new Complaint();
        $complaint->job_number              =   $job_number;
        $complaint->sbt	                    =   $request->sbtcode;
        $complaint->contact_person  	    =   $request->person;
        $complaint->contact_number  	    =   $request->number;
        $complaint->contact_email   	    =   $request->email;
        $complaint->address	                =   $request->address;
        $complaint->location	            =   $request->location;
        $complaint->query	                =   $request->complaint;
        $complaint->job_nature	            =   $request->job_nature;
        $complaint->job_nature_details	    =   $request->job_nature_details;
        $complaint->status	        	    =   $request->status;
        $complaint->ostatus	    	        =   $request->status;
        $complaint->forwarded_by    	    =   Auth::user()->username;
        $complaint->forwarded_to    	    =   $forwarded;
        $complaint->date_time	            =   date('Y-m-d h-m-i');
        $complaint->query_type	            =   $request->com_type;
        $complaint->save();

        $history = new History();
        $history->pid                       = $complaint->id;
        $history->status                    = $request->status;
        $history->forward_by                = Auth::user()->username;
        $history->forwarded_to              = $forwarded;
        $history->comments                  = $request->complaint;
        $history->solved_by                 = $request->solved;
        $history->save();

        return back();

    }

    /**
     * ========================================================================================================= *
     *                                   Edit Complaint
     * ========================================================================================================= *
     */

    public function up(Request $request)
    {
        $forwarded = (!empty($request->forwarded_to) ? $request->forwarded_to : Auth::user()->username);

        $complaint = Complaint::findOrFail($request->id);
        $complaint->sbt	                    =   $request->sbtcode;
        $complaint->contact_person  	    =   $request->person;
        $complaint->contact_number  	    =   $request->number;
        $complaint->contact_email   	    =   $request->email;
        $complaint->address	                =   $request->address;
        $complaint->location	            =   $request->location;
        $complaint->query	                =   $request->complaint;
        $complaint->job_nature	            =   $request->job_nature;
        $complaint->job_nature_details	    =   $request->job_nature_details;
        $complaint->status	        	    =   $request->status;
        $complaint->ostatus	    	        =   $request->status;
        $complaint->forwarded_by    	    =   Auth::user()->username;
        $complaint->forwarded_to    	    =   $forwarded;
        $complaint->date_time	            =   date('Y-m-d h-m-i');
        $complaint->query_type	            =   $request->com_type;
        $complaint->save();

        $history = new History();
        $history->pid                       = $complaint->id;
        $history->status                    = $request->status;
        $history->forward_by                = Auth::user()->username;
        $history->forwarded_to              = $forwarded;
        $history->comments                  = $request->complaint;
        $history->solved_by                 = $request->solved;
        $history->save();

        return back();

    }

    /**
     * ========================================================================================================= *
     *                                   Delete Complaint
     * ========================================================================================================= *
     */

    public function destroy($id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();
    }

}
