@extends('layouts.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Company</h1>
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
              <h3 class="card-title">Create Company</h3>
              <a href="/company" class="btn btn-outline-warning btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="{{ route('company.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="branch">Company Name</label>
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
                        <div class="col-md-6 mb-3">
                          <label for="location">Location</label>
                          {{-- <input type="text" class="form-control " id="location_id" name="location_id" required> --}}
                          <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="location_id" id="location_id" style="width: 100%;">
                            {{-- <option selected="selected" disabled>{{$loc_name}}</option> --}}
                            @foreach ($loc as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
                              {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
                            @endforeach
                          </select>
                        </div>
                      </div>         
                      
                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="address">Note</label>
                            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
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
