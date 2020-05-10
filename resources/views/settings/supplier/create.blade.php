@extends('layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Supplier</h1>
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
              <h3 class="card-title">Create Supplier</h3>
              <a href="/supplier" class="btn btn-outline-warning btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="{{ route('supplier.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="name">Supplier</label>
                        <input type="text" class="form-control " id="name" name="name" required>
                      </div>
                    </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control " id="city" name="city">
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="post_code">Post Code</label>
                            <input type="text" class="form-control " id="post_code" name="post_code">
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="phone">Company Phone</label>
                            <input type="text" class="form-control " id="phone" name="phone">
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="cp">Contact Person</label>
                            <input type="text" class="form-control " id="cp" name="cp">
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="cp_email">Contact Person's Email</label>
                            <input type="text" class="form-control " id="cp_email" name="cp_email">
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="cp_phone">Contact Person's Phone</label>
                            <input type="text" class="form-control " id="cp_phone" name="cp_phone">
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="website">Website</label>
                            <input type="text" class="form-control " id="website" name="website" >
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="note">Notes</label>
                          <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                        </div>
                      </div>  
                      
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="status">Status</label>
                            {{-- <input type="text" class="form-control " id="status" name="status" > --}}
                            <select class="form-control form-control-sm" name="status" id="status" required>
                              <option value="ACTIVE">ACTIVE</option>
                              <option value="STOPPED">STOPPED</option>
                              <option value="DEACTIVATED">DEACTIVATED</option>
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
