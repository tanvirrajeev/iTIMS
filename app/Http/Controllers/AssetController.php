<?php

namespace App\Http\Controllers;

use App\Asset;
use App\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class AssetController extends Controller
{
    public function index(){
        $asset = Asset::all();

        return view('fixedasset.asset.index',compact('asset'));
    }

    public function assetlist(){
        $data = DB::table('assets')
        ->join('manufacturers', 'manufacturers.id', '=', 'assets.manufacturer_id')
        ->join('categories', 'categories.id', '=', 'assets.category_id')
        ->leftJoin('employees', 'employees.id', '=', 'assets.employee_id')
        ->select('assets.name','assets.id as id','employees.name as empname','manufacturers.name as manname','categories.name as catname','assets.serial','assets.is_assigned','assets.employee_id','assets.status')
        ->get();

        return Datatables::of($data)
        //setting up id to every row for passing it through route('assetdetails', $data->id) to get specific data for display on Modal
        ->setRowId(function ($data) {
            return $data->id;
            })
        ->editColumn('name', function ($data)  {
            // This will set a link to Name field on Datatables and also call a Modal from resources\views\fixedasset\asset\details.blade.php with asset id data-id='.$data->id.'
            return '<a data-id='.$data->id.' data-target="#exampleModal" data-toggle="modal" id="exampleModal" href="">'.$data->name.'</a>';
            })
        ->editColumn('is_assigned', function ($data)  {
            // This will set a link to is_assigned (Assigned to) field on Datatables and also call a Modal from resources\views\fixedasset\asset\details.blade.php with asset id data-id='.$data->id.'
            return '<a data-id='.$data->id.' data-target="#assetassign" data-toggle="modal" id="assetassign" href="">'.$data->is_assigned.'</a>';
            })
        ->editColumn('employee_id', function ($data)  {
            // This will set a link to employee_id (Assigned to) field on Datatables and also call a Modal from resources\views\fixedasset\asset\details.blade.php with asset id data-id='.$data->id.'
            return '<a data-id='.$data->id.' data-target="#assigndetails" data-toggle="modal" id="assigndetails" href="">'.$data->empname.'</a>';
            })    
        ->rawColumns(['name','is_assigned','employee_id'])
        ->make(true);
    }

    public function details(Request $request){
                
        $id = $_GET['id'];
        $data = DB::table('assets')
        ->where('assets.id', $id)
        ->join('astmodels', 'astmodels.id', '=', 'assets.astmodel_id')
        ->join('categories', 'categories.id', '=', 'assets.category_id')
        ->join('suppliers', 'suppliers.id', '=', 'assets.supplier_id')
        ->join('manufacturers', 'manufacturers.id', '=', 'assets.manufacturer_id')
        ->join('warehouses', 'warehouses.id', '=', 'assets.warehouse_id')
        ->select(
            'assets.name',
            'astmodels.name as astmodel_name',
            'categories.name as catname',
            'suppliers.name as supplier_name',
            'manufacturers.name as manname',
            'assets.serial',
            'assets.uom',
            'warehouses.name as warname',
            'assets.po',
            'assets.unit_cost',
            'assets.invoice',
            'assets.inv_dt',
            'assets.asset_tag',
            'assets.wrntyexp_dt',
            'assets.expenditure_type',
            'assets.eol',
            'assets.depreciation_model',
            'assets.note',
            'assets.is_assigned',
            'assets.status'
            )
        ->get();

        return response($data);
    }

    public function assign(Request $request){
        $query = $_GET['query'];
        $data = DB::table('employees')
            ->where('employees.name', 'LIKE', "%{$query}%")
            ->join('divisions', 'divisions.id', '=', 'employees.division_id')
            ->select(
                'employees.name',
                'employees.employee_id',
                'employees.designation',
                'employees.email',
                'divisions.id as divid',
                'divisions.name as divname',
                'employees.id as id'
            )
            ->get();

        return response($data);

    }

    public function employeeassignment(Request $request){

        $asset_id = $_GET['asset_id'];
        $employee_id = $_GET['employee_id'];
        $assetdiv_id = $_GET['assetdiv_id'];

        DB::table('assets')
              ->where('id', $asset_id)
              ->update(['employee_id' => $employee_id, 'division_id' => $assetdiv_id, 'warehouse_id' => '9999', 'is_assigned' => 'Yes', 'status' => 'Assigned', "assigned_date"=> Carbon::now()]);


        return response("Success!!!");
    }

    public function assignmentdetails(){
        $id = $_GET['id'];
        $data = DB::table('assets')
        ->where('assets.id', $id)
        ->join('employees', 'employees.id', '=', 'assets.employee_id')
        ->join('divisions', 'divisions.id', '=', 'assets.division_id')
        ->select(
            'assets.employee_id',
            'assets.assigned_date',
            'employees.name as emp_name',
            'employees.designation as emp_desig',
            'employees.email as emp_email',
            'employees.division_id as emp_div',
            'divisions.name as div_name'
            )
        ->get();

        return response($data);
    }

    public function test(){
        // $data = Employee::all();
        // $query = $request->get('query');
        $request = 'Tan';
        $query = 'Tan';
        // $data = Employee::where('name', 'LIKE', "%{$request}%")
        // ->get();
        $data = DB::table('employees')
        ->where('employees.name', 'LIKE', "%{$query}%")
        ->get();
        dd($data);
        return view('fixedasset.asset.test',compact('data'));

    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show(Asset $asset){
        //
    }

    public function edit(Asset $asset){
        //
    }

    public function update(Request $request, Asset $asset){
        //
    }

    public function destroy(Asset $asset){
        //
    }
}