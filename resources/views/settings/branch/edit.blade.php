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
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Update Business Unit</h3>
              <a href="/branch" class="btn btn-outline-warning btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="/branch/{{$br->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="branch">Business Unit Name</label>
                        <input type="text" class="form-control " id="branch" name="branch" value="{{$br->name}}" required>
                      </div>
                    </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3">{{$br->address}}</textarea>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="location_id">Company</label>
                          <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="company_id" id="company_id" style="width: 100%;">
                            {{-- <option selected="selected" disabled>{{$loc_name}}</option> --}}
                            <option value="{{$com_id}}" selected>{{$com_name}}</option>
                            @if ($com->count() > 1)
                              @foreach ($com as $item)
                                <option
                                @if ($item->id == $com_id)
                                    disabled
                                @endif 
                                  value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach    
                            @endif
                            
                          </select>
                        </div>
                      </div> 

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="location_id">Location</label>
                          <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="location_id" id="location_id" style="width: 100%;">
                            <option value="{{$loc_id}}" selected>{{$loc_name}}</option>
                              @if ($loc->count() > 1)
                                @foreach ($loc as $item)
                                <option
                                  @if ($item->id == $loc_id)
                                    disabled
                                  @endif
                                  value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                              @endif
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
