@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Division</h1>
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
              <h3 class="card-title">Division List</h3>
              <a href="/division/create" class="btn btn-outline-warning btn-sm float-right">Create Division</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered" id="division-table">
                    <thead>
                        <tr>
                            <th>Division</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                </table>
               
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        
          <script>
            $(function() {
                $('#division-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('divisionlist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'description', name: 'description' }
                    ]
                });
            });
            </script>
     

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection