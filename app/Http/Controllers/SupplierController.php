<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{

    public function index()
    {
        return view('settings.supplier.index');
    }

    public function supplierlist(){
        return Datatables::of(Supplier::query())->make(true);
    }

    public function create()
    {
        return view('settings.supplier.create');
    }

    public function store(Request $request)
    {
        $sup = new Supplier;
        $sup->name = $request->name;
        $sup->address = $request->address;
        $sup->city = $request->city;
        $sup->post_code = $request->post_code;
        $sup->phone = $request->phone;
        $sup->cp = $request->cp;
        $sup->cp_email = $request->cp_email;
        $sup->cp_phone = $request->cp_phone;
        $sup->website = $request->website;
        $sup->note = $request->note;
        $sup->status = $request->status;
        $sup->save();

        return redirect(route('supplier.index'))->with('toast_success','Supplier Created');
    }

    public function show(Supplier $supplier)
    {
        //
    }

    public function edit(Supplier $supplier)
    {
        //
    }


    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    public function destroy(Supplier $supplier)
    {
        //
    }
}
