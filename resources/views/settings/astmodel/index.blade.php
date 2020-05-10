@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Model</h1>
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
              <h3 class="card-title">Model List</h3>
              <a href="/astmodel/create" class="btn btn-outline-warning btn-sm float-right">Create Model</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered" id="model-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Manufacturer</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                </table>
               
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        
          <script>
            $(function() {
                $('#model-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('astmodellist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'manname', name: 'manufacturers.name' },
                        { data: 'catname', name: 'categories.name' }
                    ]
                });
            });
            </script>
     

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection