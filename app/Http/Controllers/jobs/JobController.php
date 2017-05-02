<?php

namespace App\Http\Controllers\jobs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    //
	
	public function new_job_card()
	{
		return view('template\jobs\new_job_card');
	}

	public function new_complaint()
	{
		return view('template\complaints\new_complaint');
	}
}
