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
              <h3 class="card-title">Create Business Unit</h3>
              <a href="/branch" class="btn btn-outline-warning btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="{{ route('branch.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="branch">Business Unit Name</label>
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
                          <label for="location_id">Company</label>
                          <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="company_id" id="company_id" style="width: 100%;">
                            {{-- <option selected="selected" disabled>{{$loc_name}}</option> --}}
                            @foreach ($com as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
                              {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
                            @endforeach
                          </select>
                        </div>
                      </div> 

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="location_id">Location</label>
                          <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="location_id" id="location_id" style="width: 100%;">
                            {{-- <option selected="selected" disabled>{{$loc_name}}</option> --}}
                            @foreach ($loc as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
                              {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
                            @endforeach
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
