<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('settings.company.index');
    }

    public function companylist(){
        return Datatables::of(Company::query())->make(true);
    }

    public function create(){
        return view('settings.company.create');
    }


    public function store(Request $request)
    {
        $com = new Company;
        $com->name = $request->name;
        $com->address = $request->address;
        $com->location_id = $request->location_id;
        $com->note = $request->note;
        $com->save();

        return redirect(route('company.index'))->with('toast_success','Company Created');
    }

    public function show(Company $company)
    {
        //
    }

    public function edit(Company $company)
    {
        //
    }

    public function update(Request $request, Company $company)
    {
        //
    }

    public function destroy(Company $company)
    {
        //
    }
}
