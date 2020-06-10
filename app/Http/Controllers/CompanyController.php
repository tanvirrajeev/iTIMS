<?php

namespace App\Http\Controllers;

use App\Company;
use App\Location;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('settings.company.index');
    }

    public function companylist(){
        $data = DB::table('companies')
        ->join('locations', 'locations.id', '=', 'companies.location_id')
        ->select('companies.name','companies.address','locations.name as loc_name')
        ->get();

        return Datatables::of($data) //Company::query()
        ->make(true);
    }

    public function create(){
        $loc = Location::all();
        return view('settings.company.create',compact('loc'));
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
