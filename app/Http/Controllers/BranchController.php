<?php

namespace App\Http\Controllers;

use App\Branch;
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
        ->join('locations', 'locations.id', '=', 'branches.location_id')
        ->select('branches.id as id','branches.name as name','branches.address as address','locations.name as loc_name')
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
        $loc = Location::all();
        return view('settings.branch.create',compact('loc'));
    }

    public function store(Request $request){
        
        $br = new Branch;
        $br->name = $request->branch;
        $br->address = $request->address;
        $br->location_id = $request->location_id;
        $br->save();

        return redirect(route('branch.index'))->with('toast_success','Branch Created');
        
    }

    public function show(Branch $branch){
        //
    }

    public function edit($id){
        $br = Branch::find($id);
        $loc = Location::all();
        $loc_name = $br->name;
        //dd($loc);
        return view('settings.branch.edit',compact('br','loc_name','loc'));
        // return view('settings.branch.edit');
    }

    public function update(Request $request, Branch $branch)
    {
        //
    }

    public function destroy($id)
    {
        // return $id;
        $item = Branch::find($id);
        $item->delete();
        return redirect(route('branch.index'))->with('toast_success','Business Unit Deleted');
    }
}
