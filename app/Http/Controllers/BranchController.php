<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Company;
use App\Location;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function index(){

        return view('settings.branch.index');
    }

    public function branchlist(){
        $data = DB::table('branches')
        ->join('companies', 'companies.id', '=', 'branches.company_id')
        ->join('locations', 'locations.id', '=', 'branches.location_id')
        ->select('branches.id as id','branches.name as name','branches.address as address','locations.name as loc_name','companies.name as com_name')
        ->get();
        
        return Datatables::of($data) //Branch::query()
        ->addColumn('action', function( $data) {
            return  '<a href="branch/'.$data->id.'/edit" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i><i class="fas fa-edit"></i></a>
            <button class="btn btn-xs btn-danger btn-delete" data-remote="/branch/'. $data->id . '"><i class="fas fa-trash-alt"></i></button>
            ';
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function create(){
        $com = Company::all();
        $loc = Location::all();
        return view('settings.branch.create',compact('loc','com'));
    }

    public function store(Request $request){
        
        $br = new Branch;
        $br->name = $request->branch;
        $br->address = $request->address;
        $br->company_id = $request->company_id;
        $br->location_id = $request->location_id;
        $br->save();

        return redirect(route('branch.index'))->with('toast_success','Business Unit Created');
        
    }

    public function show(Branch $branch){
        //
    }

    public function edit($id){
        $br = Branch::find($id);
        
        $com = Company::all();
        $com_id = $br->company_id;
        $com_row_data = Company::find($com_id);
        $com_name = $com_row_data->name;

        $loc = Location::all();
        // $loc_name = $br->name;
        $loc_id = $br->location_id;
        $loc_row_data = Location::find($loc_id);
        $loc_name = $loc_row_data->name;
        // dd($loc_name);
        return view('settings.branch.edit',compact('br','loc_id','loc_name','loc','com','com_id','com_name'));
        // return view('settings.branch.edit');
    }

    public function update(Request $request, $id)
    {
        $br = Branch::find($id);
        $br->name = $request->get('branch');
        $br->address = $request->get('address');
        $br->company_id = $request->get('company_id');
        $br->location_id = $request->get('location_id');
        $br->save();

        return redirect(route('branch.index'))->with('toast_success','Business Unit Updated');
    }

    public function destroy($id)
    {
        // return $id;
        $item = Branch::find($id);
        $item->delete();
        return redirect(route('branch.index'))->with('toast_success','Business Unit Deleted');
    }
}
