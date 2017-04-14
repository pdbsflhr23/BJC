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
}
