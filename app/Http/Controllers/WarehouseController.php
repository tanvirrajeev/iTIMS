<?php

namespace App\Http\Controllers;

use App\Warehouse;
use App\Branch;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class WarehouseController extends Controller
{
    public function index()
    {
        return view('settings.warehouse.index');
    }

    public function warehouselist(){
        $data = DB::table('warehouses')
        ->join('branches', 'branches.id', '=', 'warehouses.branch_id')
        ->select('warehouses.name','branches.name as brname','warehouses.address')
        ->get();
        // dump($data);
        return Datatables::of($data)->make(true);
        // return Datatables::of(Warehouse::query())->make(true);
    }

    public function create()
    {
        $br = Branch::all();
        return view('settings.warehouse.create', compact('br'));
    }

    public function store(Request $request)
    {
        $war = new Warehouse;
        $war->name = $request->name;
        $war->branch_id = $request->branch_id;
        $war->address = $request->address;
        $war->note = $request->note;
        $war->save();

        return redirect(route('warehouse.index'))->with('toast_success','Warehouse Created');
    }

    public function show(Warehouse $warehouse)
    {
        //
    }

    public function edit(Warehouse $warehouse)
    {
        //
    }

    public function update(Request $request, Warehouse $warehouse)
    {
        //
    }


    public function destroy(Warehouse $warehouse)
    {
        //
    }
}
