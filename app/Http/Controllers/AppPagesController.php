<?php

namespace App\Http\Controllers;

class AppPagesController extends Controller
{

    public function faqs()
    {
        return view('admin.appPages.faqs');
    }

    public function inbox()
    {
        return view('admin.appPages.inbox');
    }

    public function inboxView()
    {
        return view('admin.appPages.inbox.view');
    }

    public function inboxCompose()
    {
        return view('admin.appPages.inbox.compose');
    }

    public function profile()
    {
        return view('admin.appPages.profile');
    }

    public function profileUpdate()
    {
        return view('admin.appPages.profile.update');
    }

    public function orders()
    {
        return view('admin.appPages.orders');
    }

    public function calendar()
    {
        return view('admin.appPages.calendar');
    }

    public function enquiry()
    {
        return view('admin.appPages.enquiry');
    }

    public function pageNotFound()
    {
        return view('admin.appPages.pageNotFound');
    }

}
