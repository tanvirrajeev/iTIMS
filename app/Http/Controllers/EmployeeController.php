<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Division;
use App\Branch;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{

    public function index(){
        return view('settings.employee.index');
    }

    public function employeelist(){
        
        // $data = DB::table('employees')
        //     ->join('divisions', 'employees.division_id', '=', 'divisions.id')
        //     ->select(
        //         DB::raw('divisions.name as name')
        //     )
        //     ->groupBy('divisions.name')
        //     ->get();

        $data = DB::table('employees')
            ->join('divisions', 'divisions.id', '=', 'employees.division_id')
            ->select('employees.id as id','employees.name','employees.designation','employees.employee_id','divisions.name as divname')
            ->get();

        // dump($data);    
        return Datatables::of($data)
        ->addColumn('action', function( $data) {
            return  '<a href="employee/'.$data->id.'/edit" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i><i class="fas fa-edit"></i></a>
            <a href="employee/'.$data->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-zoom-in"></i><i class="fas fa-trash-alt"></i></a>';
        })
        ->rawColumns(['action'])
        // ->toJson();
        ->make(true);
        // return Datatables::of(Employee::query())->make(true);
    }

    public function create(){
        $div = Division::all();
        $br = Branch::all();
        // dd($div);
        return view('settings.employee.create', compact('div','br'));
    }

    public function store(Request $request){
        $emp = new Employee;
        $emp->name = $request->name;
        $emp->designation = $request->designation;
        $emp->employee_id = $request->empid;
        $emp->email = $request->email;
        $emp->division_id = $request->division;
        $emp->department = $request->department;
        $emp->phone = $request->phone;
        $emp->branch_id = $request->branch;
        $emp->supervisor_id = $request->supervisor;
        $emp->status = $request->status;
        $emp->save();

        return redirect(route('employee.index'))->with('toast_success','Employee Created');
    }

    public function show(Employee $employee){
        //
    }

    public function edit(Employee $employee){
        return view('settings.employee.edit');
    }

    public function update(Request $request, Employee $employee){
        //
    }

    public function destroy(Employee $employee){
        //
    }
}
