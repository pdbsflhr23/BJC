<?php

namespace App\Http\Controllers\Sales;

use App\SalesPerson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesPersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * ========================================================================================================= *
     *                                   Add and View of All Sales Person
     * ========================================================================================================= *
     */

    public function view()
    {
        $persons = SalesPerson::paginate(20);
        return view('template\sales\persons', compact('persons'));
    }

    /**
     * ========================================================================================================= *
     *                                   Edit Sales Person
     * ========================================================================================================= *
     */

    public function edit($id)
    {
        return SalesPerson::where('sbtid', $id)->first();
    }

    /**
     * ========================================================================================================= *
     *                                   Store New Sales Person
     * ========================================================================================================= *
     */

    public function store(Request $request)
    {
        $person = new SalesPerson();
        $person->sbtid        = $request->sbtid;
        $person->name         = $request->name;
        $person->phone        = $request->phone;
        $person->email        = $request->email;
        $person->save();
    }

    /**
     * ========================================================================================================= *
     *                                   Update Sales Person
     * ========================================================================================================= *
     */

    public function update(Request $request)
    {
        return $request->all();
        $person = SalesPerson::where('sbtid', $request->sbtid)->first();
        $person->sbtid        = $request->sbtid;
        $person->name         = $request->name;
        $person->phone        = $request->phone;
        $person->email        = $request->email;
        $person->save();
    }/**
     * ========================================================================================================= *
     *                                   Delete Sales Person
     * ========================================================================================================= *
     */

    public function destroy($id)
    {
        $person = SalesPerson::findOrFail($id);
        $person->delete();
    }

}
