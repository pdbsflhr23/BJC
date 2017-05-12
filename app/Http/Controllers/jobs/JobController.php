<?php

namespace App\Http\Controllers\jobs;

use App\MODEL\IDS;
use App\MODEL\ItemCode;
use App\MODEL\Job;
use App\MODEL\JobBilling;
use App\MODEL\JobNature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * ========================================================================================================= *
     *                                   Add JOB View
     * ========================================================================================================= *
     */

    public function add()
    {
        $natures = JobNature::all();
        $codes = ItemCode::select('id', 'item_code')->get();
        return view('template\jobs\new_job_card', compact('natures', 'codes'));
    }

    /**
     * ========================================================================================================= *
     *                                   Store New JOB
     * ========================================================================================================= *
     */

    public function store(Request $request)
    {
        return $request->all();

        $last_id = IDS::first()->com;
        $upload = public_path('uploads/job');
        $job_number = date('ym').$request->identifier."-".$last_id."-".$request->job_nature;

        $po_file = $request->file('po_file');
        $po_name=$po_file->getClientOriginalName();
        $po_file->move($upload, $po_name);
        $quotation_file = $request->file('quotation_file');
        $quot_name=$quotation_file->getClientOriginalName();
        $quotation_file->move($upload, $quot_name);

        $job = new Job();
        $job->job_number                =   $job_number;
        $job->sales_person_name         =   $request->sales_person_name;
        $job->job_identifier            =   $request->identifier;
        $job->po_number                 =   $request->po_number;
        $job->po                        =   $request->po_file;
        //$job->quotation_bid              =   $request->quotation_file;
        $job->sales_quotation           =   $request->$quotation_file;
        $job->target_execution_date     =   $request->sp_deadline;
        $job->sales_comments            =   $request->sales_comments;
        $job->customer_sbtid            =   $request->sage;
        $job->company_name              =   $request->com_name;
        //$job->                          =   $request->industry;
        $job->contact_cnic              =   $request->cnic;
        //$job->                          =   $request->ntn;
        $job->contact_person            =   $request->contact_person;
        $job->contact_ll                =   $request->contact_landline;
        $job->contact_fax               =   $request->fax;
        $job->contact_cell              =   $request->contact_cell;
        $job->contact_email             =   $request->contact_email;
        $job->postal_address            =   $request->bill_address;
        //$job->postal_address          =   $request->ship_address;
        //$job->Contact Landline        =   $request->pro_location;

        if ($request->billing_type == 'New'){
            $billing = new JobBilling();
            $billing->job_id                = $job->id;
            $billing->item_code_id          = $request;
            $billing->item_price            = $request;
            $billing->taxable               = $request;
            $billing->qty                   = $request;
            $billing->net_price             = $request;
            $billing->sale_price            = $request;
            $billing->discount              = $request;
            $billing->tax_amount            = $request;
            $billing->reoccurrence          = $request;
            $billing->r_price               = $request;
            $billing->next_reoccurrence     = $request;
        }
        if ($request->billing_type == 'Void'){
            $billing = new JobBilling();
            $billing->job_id                = $job->id;
            $billing->	void_sale_price     = $request;
            $billing->credit_memo           = $request;
            $billing->sp_comment            = $request;
            $billing->	attachment          = $request;
            $billing->manager_comment	    = $request;
            $billing->approval            = $request;
        }

    }

    /**
     * ========================================================================================================= *
     *                                   JSON - Get Item Code Price
     * ========================================================================================================= *
     */

    public function itemPrice($id)
    {
        return ItemCode::where('id', $id)->first();
    }

}
