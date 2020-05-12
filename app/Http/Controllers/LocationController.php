<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class LocationController extends Controller
{
    public function index()
    {
        return view('settings.location.index');
    }

    public function locationlist(){

        $data = DB::table('locations')
            ->get();

        // dump($data);    
        //<a href="location/'.$data->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-zoom-in"></i><i class="fas fa-trash-alt"></i></a>
        //<button class="btn btn-delete" data-remote="location/'. $data->id.'">Delete</button>
        return Datatables::of($data)
        ->addColumn('action', function( $data) {
            return  '<a href="location/'.$data->id.'/edit" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i><i class="fas fa-edit"></i></a>
            <button class="btn btn-xs btn-danger btn-delete" data-remote="/location/'. $data->id . '"><i class="fas fa-trash-alt"></i></button>
            ';
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function create()
    {
        return view('settings.location.create');
        
    }

    public function store(Request $request)
    {
        $loc = new Location;
        $loc->name = $request->name;
        $loc->address = $request->address;
        $loc->note = $request->note;
        $loc->status = $request->status;
        $loc->save();

        return redirect(route('location.index'))->with('toast_success','Company Created');
    }

    public function show(Location $location)
    {
        //
    }

    public function edit($id)
    {
        $loc = Location::find($id);
        // dd($loc);
        return view('settings.location.edit',compact('loc'));
    }

    public function update(Request $request, $id)
    {
        $loc = new Location;
        $loc = Location::find($id);
        $loc->name = $request->name;
        $loc->address = $request->address;
        $loc->note = $request->note;
        $loc->status = $request->status;
        $loc->save();

        return redirect(route('location.index'))->with('toast_success','Company Created');
    }

    public function destroy($id)
    {
        // Location::find($id)->delete();
        //     return redirect (route('location.index'))->with('toast_success','Location Deleted Successfully...');

        $item = Location::find($id);
        $item->delete();
        return redirect(route('location.index'))->with('toast_success','Location Deleted');
    }
}
