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
              <h3 class="card-title">Create Employee</h3>
              <a href="/employee" class="btn btn-outline-warning btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="{{ route('employee.store') }}" method="POST">
                  @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="name">Employee Name</label>
                        <input type="text" class="form-control " id="name" name="name" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="designation">Dsignation</label>
                        <input type="text" class="form-control " id="designation" name="designation" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="empid">Employee ID</label>
                        <input type="text" class="form-control " id="empid" name="empid" placeholder="i.e 750" required>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-3 mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control " id="email" name="email">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="division">Company</label>
                        <select class="form-control form-control-sm" name="company_id" id="company_id" required>
                          @foreach ($com as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="division">Division</label>
                        <select class="form-control form-control-sm" name="division" id="division" required>
                          @foreach ($div as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="department">Department</label>
                        <input type="text" class="form-control " id="department" name="department">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control " id="phone" name="phone">
                      </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label for="branch">Business Uit</label>
                          <select class="form-control form-control-sm" name="branch" id="branch" required>
                            @foreach ($br as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                          </select>
                          {{-- <input type="text" class="form-control " id="branch" name="branch" required> --}}
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="supervisor">Supervisor</label>
                          <input type="text" class="form-control " id="supervisor" name="supervisor">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-3 mb-3">
                          <label>Status</label>
                          <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="status" id="status" style="width: 100%;">
                            <option selected="selected">Active</option>
                            <option>Resigned</option>
                          </select>
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
