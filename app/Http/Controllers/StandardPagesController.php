<?php

namespace App\Http\Controllers;

class StandardPagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function widgets()
    {
        return view('admin.widgets');
    }

    public function tables()
    {
        return view('admin.tables');
    }

    public function forms()
    {
        return view('admin.forms');
    }

    public function chartJs()
    {
        return view('admin.chartJs');
    }

}