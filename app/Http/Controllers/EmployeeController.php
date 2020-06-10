<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
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
            '; //<a href="employee/'.$data->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-zoom-in"></i><i class="fas fa-trash-alt"></i></a>
        })
        ->rawColumns(['action'])
        // ->toJson();
        ->make(true);
        // return Datatables::of(Employee::query())->make(true);
    }

    public function create(){
        $com = Company::all();
        $div = Division::all();
        $br = Branch::all();
        // dd($div);
        return view('settings.employee.create', compact('div','br','com'));
    }

    public function store(Request $request){
        $emp = new Employee;
        $emp->name = $request->name;
        $emp->designation = $request->designation;
        $emp->employee_id = $request->empid;
        $emp->email = $request->email;
        $emp->company_id = $request->company_id;
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

    public function edit($id)
    {
        $emp = Employee::find($id);

        $com = Company::all();
        $com_id = $emp->company_id;
        $com_row_data = Company::find($com_id);
        $com_name = $com_row_data->name;
        // dd($com_name);

        $div = Division::all();
        $div_id = $emp->division_id;
        $div_row_data = Division::find($div_id);
        $div_name = $div_row_data->name;

        $br = Branch::all();
        $br_id = $emp->branch_id;
        $br_row_data = Branch::find($br_id);
        $br_name = $br_row_data->name;
        // dd($br_name);
        return view('settings.employee.edit', compact('emp','div','br','div_id','div_name','br_id','br_name','com','com_id','com_name'));
        // return view('settings.employee.edit');
    }

    public function update(Request $request, $id){
        $emp = Employee::find($id);

        $emp->name = $request->get('name');
        $emp->designation = $request->get('designation');
        $emp->employee_id = $request->get('empid');
        $emp->email = $request->get('email');
        $emp->company_id = $request->get('company_id');
        $emp->division_id = $request->get('division');
        $emp->department = $request->get('department');
        $emp->phone = $request->get('phone');
        $emp->branch_id = $request->get('branch');
        $emp->supervisor_id = $request->get('supervisor');
        $emp->status = $request->get('status');
        $emp->save();

        return redirect(route('employee.index'))->with('toast_success','Employee Updated Successfully');
    }

    public function destroy(Employee $employee){
        //
    }
}
