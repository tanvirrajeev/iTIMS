@extends('layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Branch</h1>
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Create Branch</h3>
              <a href="/division" class="btn btn-outline-warning btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="{{ route('branch.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="branch">Branch Name</label>
                        <input type="text" class="form-control " id="branch" name="branch" required>
                      </div>
                    </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="location">Location</label>
                          <input type="text" class="form-control " id="location" name="location" required>
                        </div>
                      </div>                      

                    <button class="btn btn-primary" type="submit">Submit</button>
                  </form>



            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <script>

          </script>


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection
