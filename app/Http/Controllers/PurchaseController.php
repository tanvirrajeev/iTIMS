<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Purchase;
use App\Manufacturer;
use App\Category;
use App\Astmodel;
use App\Supplier;
use App\Warehouse;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;


class PurchaseController extends Controller
{
    public function index(){
        return view('fixedasset.purchase.index');
    }

    public function create(){
        $mod = Astmodel::all();
        $sup = Supplier::all();
        $man = Manufacturer::all();
        $cat = Category::all();
        $war = Warehouse::all();
        return view('fixedasset.purchase.create', compact('mod','sup','man', 'cat','war'));
        // return view('fixedasset.purchase.create');
    }

    public function store(Request $request){

        $astpur = new Asset;
        $astpur->name = $request->name;
        $astpur->astmodel_id = $request->astmodel_id;
        $astpur->supplier_id = $request->supplier_id;
        $astpur->manufacturer_id = $request->manufacturer_id;
        $astpur->category_id = $request->category_id;
        $astpur->serial = $request->serial;
        $astpur->uom = $request->uom;
        $astpur->warehouse_id = $request->warehouse_id;
        $astpur->po = $request->po;
        $astpur->invoice = $request->invoice;
        $astpur->inv_dt = $request->inv_dt;
        $astpur->unit_cost = $request->unit_cost;
        $astpur->expenditure_type = $request->expenditure_type;
        $astpur->depreciation_model = $request->depreciation_model;
        $astpur->wrntyexp_dt = $request->wrntyexp_dt;
        $astpur->eol = $request->eol;
        $astpur->asset_tag = $request->asset_tag;
        $astpur->note = $request->note;
        $astpur->status = "Active";
        $astpur->save();

        // dd($astpur);

        return redirect(route('asset.index'))->with('toast_success','Asset Purchased');
        
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
