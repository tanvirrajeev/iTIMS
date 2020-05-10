@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
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
              <h3 class="card-title">Category List</h3>
              <a href="/category/create" class="btn btn-outline-warning btn-sm float-right">Create Category</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered" id="category-table">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Notes</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                </table>
               
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        
          <script>
            $(function() {
                $('#category-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('categorylist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'note', name: 'note' },
                        { data: 'image', name: 'image' }
                    ]
                });
            });
            </script>
     

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection