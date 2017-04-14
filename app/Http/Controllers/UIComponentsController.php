<?php

namespace App\Http\Controllers;

class UIComponentsController extends Controller
{

    public function buttons()
    {
        return view('admin.uiComponents.buttons');
    }

    public function badgesAndLabels()
    {
        return view('admin.uiComponents.badgesAndLabels');
    }

    public function typography()
    {
        return view('admin.uiComponents.typography');
    }

    public function gridSystem()
    {
        return view('admin.uiComponents.gridSystem');
    }

    public function panels()
    {
        return view('admin.uiComponents.panels');
    }

    public function pagination()
    {
        return view('admin.uiComponents.pagination');
    }

    public function progressBars()
    {
        return view('admin.uiComponents.progressBars');
    }

    public function alerts()
    {
        return view('admin.uiComponents.alerts');
    }

}