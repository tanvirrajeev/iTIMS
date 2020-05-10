@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Warehouse</h1>
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
              <h3 class="card-title">Warehouse List</h3>
              <a href="/warehouse/create" class="btn btn-outline-warning btn-sm float-right">Create Warehouse</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered" id="warehouse-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Branch</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                </table>
               
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        
          <script>
            $(function() {
                $('#warehouse-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('warehouselist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'brname', name: 'branches.name' },
                        { data: 'address', name: 'address' }
                    ]
                });
            });
            </script>
     

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection