@extends('layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Asset List</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

      <!-- Include modal blade from resources\views\fixedasset\asset\details.blade.php-->
      @include('fixedasset.asset.details')

      <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Asset List</h3>
              <a href="/asset/purchase/create" class="btn btn-outline-warning btn-sm float-right">Purchase Asset</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table class="table table-bordered" id="asset-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Manufacturer</th>
                            <th>Category</th>
                            <th>Serial</th>
                            <th>iS Assigned?</th>
                            <th>Assigned To</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>
               
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        
          <script>
            $(function() {
                $('#asset-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('assetlist') !!}',
                    columns: [
                        { data: 'name', name: 'name' },
                        { data: 'manname', name: 'manufacturers.name' },
                        { data: 'catname', name: 'categories.name' },
                        { data: 'serial', name: 'serial' },
                        { data: 'is_assigned', name: 'is_assigned' },
                        { data: 'employee_id', name: 'employee_id' },
                        { data: 'status', name: 'status' }
                    ],
                    rowCallback: function(row, data, index) {
                    if (data.status == "Active"){
                        // $(row).css('background-color','#99ff9c');
                        $('td:eq(6)', row).css('background-color','#99ff9c');
                        }else if (data.status == "Damaged"){
                            $('td:eq(6)', row).css('background-color','#FA8072');
                            }else{
                            $('td:eq(6)', row).css('background-color','#87CEEB');
                            }

                    // if (data.is_assigned == ('td:eq(5)', row).text('No'){
                    //   $('td:eq(5)', row).css('background-color','#FA8072');
                    //   $('td:eq(5)', row).append("Not Assigned");
                    //   }
                    }
                });
            });
            </script>
     

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection