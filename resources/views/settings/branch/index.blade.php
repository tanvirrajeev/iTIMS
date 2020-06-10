@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Business Unit</h1>
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
              <h3 class="card-title">Business Unit List</h3>
              <a href="/branch/create" class="btn btn-outline-warning btn-sm float-right">Create Business Unit</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body ">

                <table class="table table-bordered" id="branch-table">
                    <thead>
                        <tr>
                            <th>Business Unit</th>
                            <th>Address</th>
                            <th>Company</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
               
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        
          <script>
            $(function() {
                $('#branch-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('branchlist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'address', name: 'address' },
                        { data: 'com_name', name: 'com_name' },
                        { data: 'loc_name', name: 'loc_name' },
                        { data: 'action', name: 'action' }
                    ]
                });
            });
            </script>

            <script>
              $('#branch-table').on('click', '.btn-delete[data-remote]', function (e) { 
                e.preventDefault();
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var url = $(this).data('remote');
                console.log(url);
                // confirm then
                if (confirm('Are you sure you want to delete this?')) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        dataType: 'json',
                        data: {method: '_DELETE', submit: true}
                    }).always(function (data) {
                        $('#branch-table').DataTable().draw(false);
                    });
                }else
                    alert("You have cancelled!");
            });
            </script>
     

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection