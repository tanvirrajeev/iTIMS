<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class BranchController extends Controller
{
    public function index(){
        return view('settings.branch.index');
    }

    public function branchlist(){
        return Datatables::of(Branch::query())->make(true);
    }

    public function create(){
        return view('settings.branch.create');
    }

    public function store(Request $request){

        $br = new Branch;
        $br->name = $request->branch;
        $br->address = $request->address;
        $br->location = $request->location;
        $br->save();

        return redirect(route('branch.index'))->with('toast_success','Branch Created');
        
    }

    public function show(Branch $branch){
        //
    }

    public function edit(Branch $branch){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
