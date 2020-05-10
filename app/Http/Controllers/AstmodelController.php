<?php

namespace App\Http\Controllers;

use App\Astmodel;
use App\Manufacturer;
use App\Category;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class AstmodelController extends Controller
{
    public function index(){
        return view('settings.astmodel.index');
    }

    public function astmodellist(){
        $data = DB::table('astmodels')
        ->join('manufacturers', 'manufacturers.id', '=', 'astmodels.manufacturer_id')
        ->join('categories', 'categories.id', '=', 'astmodels.category_id')
        ->select('astmodels.name','manufacturers.name as manname','categories.name as catname')
        ->get();
        // dump($data);
        return Datatables::of($data)->make(true);
        // return Datatables::of(Astmodel::query())->make(true);
    }

    public function create(){
        $man = Manufacturer::all();
        $cat = Category::all();
        // dd($div);
        return view('settings.astmodel.create', compact('man', 'cat'));
        // return view('settings.model.create');
    }

    public function store(Request $request){
        $mod = new Astmodel;
        $mod->name = $request->name;
        $mod->manufacturer_id = $request->manufacturer_id;
        $mod->category_id = $request->category_id;
        $mod->note = $request->note;
        $mod->save();

        return redirect(route('astmodel.index'))->with('toast_success','Asset Purchased');
    }

    public function show(Astmodel $astmodel){
        //
    }

    public function edit(Astmodel $astmodel){
        //
    }

    public function update(Request $request, Astmodel $astmodel){
        //
    }

    public function destroy(Astmodel $astmodel){
        //
    }
}
