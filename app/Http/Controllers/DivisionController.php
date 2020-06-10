<?php

namespace App\Http\Controllers;

use App\Division;
use App\Company;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DivisionController extends Controller
{
    public function index()    {
        return view('settings.division.index');
    }

    public function divisionlist(){
        return Datatables::of(Division::query())->make(true);
    }

    public function create(){
        $com = Company::all();
        return view('settings.division.create',compact('com'));
    }

    public function store(Request $request){

        $div = new Division;
        $div->name = $request->division;
        $div->description = $request->description;
        $div->company_id = $request->company_id;
        $div->save();

        return redirect(route('division.index'))->with('toast_success','Division Created');
        
    }

    public function show(Division $division){
        //
    }

    public function edit(Division $division){
        //
    }

    public function update(Request $request, Division $division){
        //
    }

    public function destroy(Division $division){
        //
    }
}
