@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Employee</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Employee List</h3>
              <a href="/employee/create" class="btn btn-outline-warning btn-sm float-right">Create Employee</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table class="table table-bordered" id="employee-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Designaiton</th>
                        <th>Emloyee ID</th>
                        <th>Division</th>
                    </tr>
                </thead>
            </table>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <script>
                $(function() {
                $('#employee-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('employeelist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'designation', name: 'designation' },
                        { data: 'employee_id', name: 'employee_id' },
                        // { data: 'division_id', name: 'division_id' }
                        { data: 'divname', name: 'divisions.name'}
                    ]
                });
            });
          </script>


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection
