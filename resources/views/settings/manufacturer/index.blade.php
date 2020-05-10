@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manufacturer</h1>
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
              <h3 class="card-title">Manufacturer List</h3>
              <a href="/manufacturer/create" class="btn btn-outline-warning btn-sm float-right">Create Manufacturer</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered" id="manufacturer-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                </table>
               
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        
          <script>
            $(function() {
                $('#manufacturer-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('manufacturerlist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'address', name: 'address' },
                        { data: 'phone', name: 'phone' }
                    ]
                });
            });
            </script>
     

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection