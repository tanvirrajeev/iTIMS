<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ManufacturerController extends Controller
{

    public function index(){
        return view('settings.manufacturer.index');
    }

    public function manufacturerlist(){
        return Datatables::of(Manufacturer::query())->make(true);
    }

    public function create(){
        return view('settings.manufacturer.create');
    }

    public function store(Request $request){
        $man = new Manufacturer;
        $man->name = $request->name;
        $man->address = $request->address;
        $man->email = $request->email;
        $man->phone = $request->phone;
        $man->website = $request->website;
        $man->logo = $request->logo;
        $man->note = $request->note;
        $man->save();

        return redirect(route('manufacturer.index'))->with('toast_success','Manufacturer Created');
    }

    public function show(Manufacturer $manufacturer)
    {
        //
    }

    public function edit(Manufacturer $manufacturer)
    {
        //
    }

    public function update(Request $request, Manufacturer $manufacturer)
    {
        //
    }

    public function destroy(Manufacturer $manufacturer)
    {
        //
    }
}
