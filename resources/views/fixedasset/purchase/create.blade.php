@extends('layouts.layout')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Asset Purchase</h1>
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
              <h3 class="card-title">Purchase Asset</h3>
              <a href="/asset" class="btn btn-outline-warning btn-sm float-right">Back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form action="{{ route('assetpurchase') }}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="name">Asset Name</label>
                        <input type="text" class="form-control " id="name" name="name" required>
                      </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="astmodel_id">Model</label>
                            <select class="form-control form-control-sm" name="astmodel_id" id="astmodel_id" required>
                              @foreach ($mod as $item)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="supplier_id">Supplier</label>
                            <select class="form-control form-control-sm" name="supplier_id" id="supplier_id" required>
                              @foreach ($sup as $item)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="manufacturer_id">Manufacturer</label>
                            <select class="form-control form-control-sm" name="manufacturer_id" id="manufacturer_id" required>
                              @foreach ($man as $item)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="category_id">Category</label>
                            <select class="form-control form-control-sm" name="category_id" id="category_id" required>
                              @foreach ($cat as $item)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="serial">Serial</label>
                          <input type="text" class="form-control " id="serial" name="serial" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="uom">Unit of Measure</label>
                          <input type="text" class="form-control " id="uom" name="uom" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="warehouse_id">Warehouse</label>
                            <select class="form-control form-control-sm" name="warehouse_id" id="warehouse_id" required>
                              @foreach ($war as $item)
                                  <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="po">PO No.</label>
                          <input type="text" class="form-control " id="po" name="po" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="invoice">Invoice No.</label>
                          <input type="text" class="form-control " id="invoice" name="invoice">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="inv_dt">Invoice Date</label>
                          <i class="fa fa-calendar-alt"></i>
                          <input type="text" class="datepicker" name="inv_dt" id="inv_dt" autocomplete="off">  
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="unit_cost">Unit Cost</label>
                          <input type="text" class="form-control " id="unit_cost" name="unit_cost">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="expenditure_type">Expenditure Type</label>
                            <select class="form-control form-control-sm" name="expenditure_type" id="expenditure_type" required>
                                  <option value="Capex">Capex</option>
                                  <option value="Opex">Opex</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="depreciation_model">Depreciation Model</label>
                            <select class="form-control form-control-sm" name="depreciation_model" id="depreciation_model" required>
                                  <option value="Straight-line">Straight-line</option>
                                  <option value="Double declining balance">Double declining balance</option>
                                  <option value="Sum of years digits">Sum of years digits</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="wrntyexp_dt">Warranty Expire Date</label>      
                          <i class="fa fa-calendar-alt"></i>
                          <input type="text" class="datepicker" name="wrntyexp_dt" id="wrntyexp_dt" autocomplete="off">  
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="eol">End of Life</label>      
                          <i class="fa fa-calendar-alt"></i>
                          <input type="text" class="datepicker" name="eol" id="eol" autocomplete="off">  
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="asset_tag">Asset Tag No.</label>
                          <input type="text" class="form-control " id="asset_tag" name="asset_tag">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="note">Notes</label>
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
