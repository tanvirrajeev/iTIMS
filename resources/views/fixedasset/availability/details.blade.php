<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <!-- Modal Asset Details-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="exampleModalLabel">Asset Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="container-fluid" id="assetdetails">
                    <div class="row">
                      <div class="col-md-2"><label for="name">Asset Name</label></div>
                      <div class="col-md-10"><input type="text" class="form-control" id="name" name="name" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="astmodel_id">Model</label></div>
                        <div class="col-md-4"><input type="text" class="form-control" id="astmodel_id" name="astmodel_id" disabled></div>
                        <div class="col-md-2"><label for="category_id">Category</label></div>
                        <div class="col-md-4"><input type="text" class="form-control" id="category_id" name="category_id" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="supplier_id">Supplier</label></div>
                        <div class="col-md-10"><input type="text" class="form-control " id="supplier_id" name="supplier_id" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="manufacturer_id">Manufacturer</label></div>
                        <div class="col-md-10"><input type="text" class="form-control " id="manufacturer_id" name="manufacturer_id" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="serial">Serial</label></div>
                        <div class="col-md-7"><input type="text" class="form-control " id="serial" name="serial" disabled></div>
                        <div class="col-md-1"><label for="uom">UOM</label></div>
                        <div class="col-md-2"><input type="text" class="form-control " id="uom" name="uom" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="warehouse_id">Warehouse</label></div>
                        <div class="col-md-4"><input type="text" class="form-control " id="warehouse_id" name="warehouse_id" disabled></div>
                    </div>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="po">PO No</label></div>
                        <div class="col-md-4"><input type="text" class="form-control " id="po" name="po" disabled></div>
                        <div class="col-md-2"><label for="unit_cost">Unit Cost</label></div>
                        <div class="col-md-4"><input type="text" class="form-control " id="unit_cost" name="unit_cost" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="invoice">Invoice No</label></div>
                        <div class="col-md-4"><input type="text" class="form-control " id="invoice" name="invoice" disabled></div>
                        <div class="col-md-2"><label for="inv_dt">Invoice Date</label></div>
                        <div class="col-md-4"><i class="fa fa-calendar-alt"></i> <input type="text" class="datepicker" name="inv_dt" id="inv_dt" autocomplete="off" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="asset_tag">Asset Tag No.</label></div>
                        <div class="col-md-4"><input type="text" class="form-control " id="asset_tag" name="asset_tag" disabled></div>
                        <div class="col-md-2"><label for="wrntyexp_dt">Warranty Expire Date</label> </div>
                        <div class="col-md-4"><i class="fa fa-calendar-alt"></i> <input type="text" class="datepicker" name="wrntyexp_dt" id="wrntyexp_dt" autocomplete="off" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="expenditure_type">Expenditure Type</label></div>
                        <div class="col-md-4"><input type="text" class="form-control " id="expenditure_type" name="expenditure_type" disabled></div>
                        <div class="col-md-2"><label for="eol">End of Life</label></div>
                        <div class="col-md-4"><i class="fa fa-calendar-alt"></i> <input type="text" class="datepicker" name="eol" id="eol" autocomplete="off" disabled></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="depreciation_model">Depreciation Model</label></div>
                        <div class="col-md-4"><input type="text" class="form-control " id="depreciation_model" name="depreciation_model" disabled></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><label for="note">Notes</label></div>
                        <div class="col-md-10"><textarea class="form-control" id="note" name="note" rows="3" disabled></textarea></div>
                    </div>                 
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- !! Modal Asset Details-->
  
  <!-- Modal Asset Assignment-->
  <div class="modal fade" id="assetassign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="exampleModalLabel">Assign To</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid" id="assetassign">
            <div class="row bg-light">
                {{-- Search by Employee Name  --}}
                <div class="row">
                    <div class="col-md-3"><label for="empname">Search Employee</label></div>
                    <div class="col-md-9"><input type="text" class="form-control" id="empname" name="empname"></div>
                </div>
            </div>  
            <hr>
            <form id="employeeassignment">
                {{-- @csrf --}}
                {{-- <div id="employee_list"></div> --}}
                <div class="row">
                    <div class="col-md-3"><label for="sempname">Name:</label></div>
                    <div class="col-md-9"><input type="text" class="form-control" id="sempname" name="sempname" disabled></div>
                </div>
                <div class="row">
                    <div class="col-md-3"><label for="sempid">ID:</label></div>
                    <div class="col-md-3"><input type="text" class="form-control" id="sempid" name="sempid" disabled></div>
                </div>
                <div class="row">
                    <div class="col-md-3"><label for="sempdesig">Designation:</label></div>
                    <div class="col-md-9"><input type="text" class="form-control" id="sempdesig" name="sempdesig" disabled></div>
                </div>
                <div class="row">
                    <div class="col-md-3"><label for="sempemail">Email:</label></div>
                    <div class="col-md-9"><input type="text" class="form-control" id="sempemail" name="sempemail" disabled></div>
                </div>
                <div class="row">
                    <div class="col-md-3"><label for="sempdiv">Devision:</label></div>
                    <div class="col-md-6"><input type="text" class="form-control" id="sempdiv" name="sempdiv" disabled></div>
                </div>
                <div class="row">
                    <div class="col-md-6"><input type="hidden" class="form-control" id="astid" name="astid"  disabled></div>
                    <div class="col-md-6"><input type="hidden" class="form-control" id="assetempid" name="assetempid" disabled></div>
                    <div class="col-md-6"><input type="hidden" class="form-control" id="assetdivid" name="assetdivid" disabled></div>
                </div>
                <br>
                <button class="btn btn-primary float-right" id="submit" type="submit">Assign</button>
                {{-- <a href="/asset/employeeassignment/{id}"><button class="btn btn-primary float-right" type="submit">Assign</button></a> --}}
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- !! Modal Asset Assignment-->


  <!-- Modal Assignment Details-->
  <div class="modal fade" id="assigndetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="exampleModalLabel">Assigned To</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid" id="assigndetails">

            <div class="row">
                <div class="col-md-3"><label for="assigndetails_name">Name:</label></div>
                <div class="col-md-9"><input type="text" class="form-control" id="assigndetails_name" name="assigndetails_name" disabled></div>
            </div>
            <div class="row">
                <div class="col-md-3"><label for="assigndetails_id">ID:</label></div>
                <div class="col-md-3"><input type="text" class="form-control" id="assigndetails_id" name="assigndetails_id" disabled></div>
            </div>
            <div class="row">
                <div class="col-md-3"><label for="assigndetails_Desig">Designation:</label></div>
                <div class="col-md-9"><input type="text" class="form-control" id="assigndetails_Desig" name="assigndetails_desig" disabled></div>
            </div>
            <div class="row">
                <div class="col-md-3"><label for="assigndetails_mail">Email:</label></div>
                <div class="col-md-9"><input type="text" class="form-control" id="assigndetails_mail" name="assigndetails_mail" disabled></div>
            </div>
            <div class="row">
                <div class="col-md-3"><label for="assigndetails_div">Devision:</label></div>
                <div class="col-md-6"><input type="text" class="form-control" id="assigndetails_div" name="assigndetails_div" disabled></div>
            </div>
            <div class="row">
                <div class="col-md-3"><label for="assigndetails_date">Assignment Date:</label></div>
                <div class="col-md-6"><input type="text" class="form-control" id="assigndetails_date" name="assigndetails_date" disabled></div>
            </div>
            <div class="row">
                <div class="col-md-6"><input type="hidden" class="form-control" id="assignastid" name="assignastid"  disabled></div>
                {{-- <div class="col-md-6"><input type="hidden" class="form-control" id="assetempid" name="assetempid" disabled></div> --}}
                {{-- <div class="col-md-6"><input type="hidden" class="form-control" id="assetdivid" name="assetdivid" disabled></div> --}}
            </div>
            {{-- <form id="deassignsubmit"> --}}
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-dismiss="modal" data-target="#deassignmodalopen">De-Assign</button>
            {{-- </form> --}}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- !! Modal Assignment Details-->  

  <!-- Modal De-Assignment-->
  <div class="modal fade" id="deassignmodalopen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="exampleModalLabel">De-Assign</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid" id="deassigncontainer">
            <p class="font-weight-bold text-monospace badge badge-warning text-wrap">**CAUTION: This action will de-assign the Asset from the User and will bring back to warehouse.</p>
            <div class="row">
                <div class="col-md-5"><label for="selectwh">Select Warehouse:</label></div>
                <div class="col-md-6">
                    <select class="form-control form-control-sm" name="selectwh" id="selectwh" required>

                    </select>
                </div>
            </div>
            <br>
            <form id="deassignform">
                <button class="btn btn-danger float-right" id="deassignform_submit" type="submit">De-Assign</button>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- !! Modal De-Assignment-->    




  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  <!-- Asset Details Scritp -->
  <script>
      $('#exampleModal').on('show.bs.modal', function (event) {
      var id = $(event.relatedTarget).data('id');
      // $(this).find(".modal-body").text(id);
      $.ajax({
          type: 'get',
          url: "{{ url('/asset/details') }}",
          data: {id:id},
          success:function(data){
              console.log(data)
              var asset = $('#assetdetails');
              for (i in data) {
                  // console.log(data[i].name)
                  asset.find('#name').val(data[i].name);
                  asset.find('#astmodel_id').val(data[i].astmodel_name);
                  asset.find('#category_id').val(data[i].catname);
                  asset.find('#supplier_id').val(data[i].supplier_name);
                  asset.find('#manufacturer_id').val(data[i].manname);
                  asset.find('#serial').val(data[i].serial);
                  asset.find('#uom').val(data[i].uom);
                  asset.find('#warehouse_id').val(data[i].warname);
                  asset.find('#po').val(data[i].po);
                  asset.find('#unit_cost').val(data[i].unit_cost);
                  asset.find('#invoice').val(data[i].invoice);
                  asset.find('#inv_dt').val(data[i].inv_dt);
                  asset.find('#asset_tag').val(data[i].asset_tag);
                  asset.find('#wrntyexp_dt').val(data[i].wrntyexp_dt);
                  asset.find('#expenditure_type').val(data[i].expenditure_type);
                  asset.find('#eol').val(data[i].eol);
                  asset.find('#depreciation_model').val(data[i].depreciation_model);
                  asset.find('#note').val(data[i].note);
              }
          }
      })
      });
  </script>
  <!-- !! Asset Details Script -->
  
  <!-- Asset Assignment Script -->
  <script>
      $('#assetassign').on('show.bs.modal', function (event) {
          var assetid = $(event.relatedTarget).data('id');
          // // $(this).find('#xyzastid').val(id);
          // $(this).find(".modal-body").text(assetid);
      $('#empname').on('keyup',function(event) {
          var query = $(this).val();
          $.ajax({
              type: 'get',
              url: "{{ url('/asset/assign') }}",
              data: {query:query},
              success:function(data){
                  console.log(data);
                  var sugg = $('#assetassign');
                  for (i in data) {
                      // console.log(data[i].name)
                      // $('#sempname').html(data[i].name);
                      // $('#sempname').val(data[i].name);
                      sugg.find('#sempid').val(data[i].employee_id);
                      sugg.find('#assetempid').val(data[i].id);
                      sugg.find('#sempname').val(data[i].name);
                      sugg.find('#sempdesig').val(data[i].designation);
                      sugg.find('#sempemail').val(data[i].email);
                      sugg.find('#sempdiv').val(data[i].divname);
                      sugg.find('#empid').val(data[i].id);
                      sugg.find('#assetdivid').val(data[i].divid);
                      // $('#employee_list').html(data[i].designation);
                      }
                  }
              })
          });
          $(this).find('#astid').val(assetid);
      });
  </script>
  <!-- !! Asset Assignment Script -->
  
  {{-- Form submit for Assignment --}}
  <script>
          $('#employeeassignment').on('submit',function(event){
          // event.preventDefault();
  
          var asset_id = $( this ).find('#astid').val();
          var employee_id = $( this ).find('#assetempid').val();
          var assetdiv_id = $( this ).find('#assetdivid').val();
          // alert(assetdiv_id);
          console.log(employee_id, asset_id)
  
          $.ajax({  
          //   url: "/asset/employeeassignment",
            url: "{{ url('/asset/employeeassignment/') }}",
            method:"get",
            data:{
              // "_token": "{{ csrf_token() }}",
              asset_id:asset_id,
              employee_id:employee_id,
              assetdiv_id:assetdiv_id,
              // _token : <?php Session::token() ?>
              // '_token': '{{ csrf_token() }}'
            },
          //   dataType: 'json',
            success:function(data){
              console.log(data);
            }
           });
          });
  </script>
  {{-- !! Form submit for Assignment --}}
  
  
  {{-- view Assignment Details --}}
  <script>
      $('#assigndetails').on('show.bs.modal', function (event) {
          var id = $(event.relatedTarget).data('id');
          // $(this).find(".modal-body").text(id);
  
          console.log(id);
          $.ajax({  
            url: "{{ url('/asset/assignmentdetails/') }}",
            method:"get",
            data:{
              id:id,
            },
            success:function(data){
              console.log(data);
              var assign = $('#assigndetails');
              //To set the id for De-Assigment 
              assign.find('#assignastid').val(id);            
              for (i in data) {
                  // console.log(data[i].name)
                  assign.find('#assigndetails_name').val(data[i].emp_name);
                  assign.find('#assigndetails_id').val(data[i].emp_id); //employee_id
                  assign.find('#assigndetails_Desig').val(data[i].emp_desig);
                  assign.find('#assigndetails_mail').val(data[i].emp_email);
                  assign.find('#assigndetails_div').val(data[i].div_name);
                  assign.find('#assigndetails_date').val(data[i].assigned_date);
              }
            }
           });
      });
  </script>
  {{-- !! view Assignment Details --}}
  
  {{-- Populate Warehouse for De-assignment & De-assignment actions --}}
  <script>
  $('#selectwh').ready(function(){
      $.ajax({
          url: "{{ url('/getwarehouse') }}",
          method:"get",
          success:function(war){
              $("#selectwh").empty();
              // $("#selectwh").append('<option>Select Warehouse</option>');
              for(i in war){
                  $("#selectwh").append('<option value="'+war[i].id+'">'+war[i].name+'</option>');
              }
          }
      });
  
      $('#deassignmodalopen').on('show.bs.modal',function(event){
          //getting the asset id from #assigndetails
          var assign = $('#assigndetails');
          var asset_id = assign.find('#assignastid').val();  
          
          // $(this).find(".modal-body").text(asset_id);
          console.log(asset_id);
  
          $('#selectwh').on('change', function(event){
              // var val = $('#selectwh').find('#option value').val();
              // var val = $('#selectwh :selected').text();
              var selectedwh = $('#selectwh :selected').val();
              console.log(selectedwh);
  
              $('#deassignform').on('submit',function(event){
                  // event.preventDefault();
                  $.ajax({  
                      url: "{{ url('/asset/deassignment') }}",
                      method:"get",
                      data:{
                          asset_id:asset_id,
                          selectedwh:selectedwh,
                      },
                      success:function(data){
                          console.log(data);
                          }
                      });            
                  });
  
          });
  
      });
  });
  </script>
  {{-- !! Populate Warehouse for De-assignment & De-assignment actions --}}