<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

class CategoryController extends Controller
{
    public function index()
    {
        return view('settings.category.index');
    }

    public function categorylist(){
        return Datatables::of(Category::query())->make(true);
    }

    public function create()
    {
        return view('settings.category.create');
    }

    public function store(Request $request)
    {
        $cat = new Category;
        $cat->name = $request->category;
        $cat->note = $request->note;
        $cat->image = $request->image;
        $cat->save();

        return redirect(route('category.index'))->with('toast_success','Category Created');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}
