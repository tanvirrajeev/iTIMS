@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Location</h1>
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
              <h3 class="card-title">Location List</h3>
              <a href="/location/create" class="btn btn-outline-warning btn-sm float-right">Create Location</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered" id="location-table">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>Address</th>
                            <th>Status</th>
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
                $('#location-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('locationlist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'address', name: 'address' },
                        { data: 'status', name: 'status' },
                        { data: 'action', name: 'action' }
                    ]
                });
            });
            </script>
     
     <script>
      $('#location-table').on('click', '.btn-delete[data-remote]', function (e) { 
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
                $('#location-table').DataTable().draw(false);
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

