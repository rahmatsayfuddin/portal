
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    <!-- START SIMPLE PANELS -->                
                    <div class="row">                    
                        <div class="col-md-10 col-md-offset-1">

                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <h2><span class="icon icon-filter" style="color: #ff0027;"></span> Filter</h2>
                                    </div>
                                    
                                    <!-- START CHECKBOXES RADIO AND SELECT -->
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-6">  
                                                <div class="col-md-6 col-xs-12 control-label"><h4>Search Package</h4></div>
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="input-group input-search">
                                                        <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                                        </span>
                                                </div>                                            
                                                </div>
                                            </div>
                                            <div class="col-md-6">  
                                                <div class="col-md-6 col-xs-12 control-label"><h4>Filter2</h4></div>
                                                <div class="col-md-6 col-xs-12">                                                                                            
                                                    <select class="form-control select">
                                                        <option>App One</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                        <option>Option 4</option>
                                                        <option>Option 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END OF CHECKBOXES RADIO AND SELECT -->

                                </div>
                            
                            </div>
                            <!-- END PRIMARY PANEL -->

                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <div id="content-package" class="table-responsive" style="min-height: 100px;"></div>
                                </div>
                            </div>
                            <!-- END PRIMARY PANEL -->

                        </div>

                    </div>
                </div>

<script>

  $('#Cancel').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var invoice_no = button.data('invoice');
    $('#invoice_no').val(invoice_no);
  })
  $('#Issued').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var invoice_no = button.data('invoice');
    $("#href_issued").attr("href", "<?php echo base_url().'Manage/doissued/'?>"+invoice_no)
  })

  $('#Cancel_hotel').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var invoice_no = button.data('invoice');
    $('#invoice_no').val(invoice_no);
  })
  $('#Issued_hotel').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var invoice_no = button.data('invoice');
    $("#href_issued_hotel").attr("href", "<?php echo base_url().'Manage/doissued_hotel/'?>"+invoice_no)
  })

  $(document).ready(function() {
    $("#content-package").LoadingOverlay("show");
      $.ajax({
        url: "<?php echo base_url();?>Admin/get_package/1",
        type: "get",
          success:function(res){
            $("#content-package").LoadingOverlay("hide", true);
            $("#content-package").html(res);
          }
      })
  });
  function search(type) {
    
      $("#content-package").LoadingOverlay("show");
        var keyword = $("#search").val();
        var page = 1;
          $.ajax({
            url: "<?php echo base_url();?>Admin/get_package/"+page+'/'+keyword,
            type: "get",
              success:function(res){
                $("#content-package").LoadingOverlay("hide", true);
                $("#content-package").html(res);
              }
          })
  }
  function refresh(type) {
   
    $("#content-package").LoadingOverlay("show");
    $("#search").val("");
      var page = 1;
        $.ajax({
          url: "<?php echo base_url();?>Admin/get_package/"+page,
          type: "get",
            success:function(res){
              $("#content-package").LoadingOverlay("hide", true);
              $("#content-package").html(res);
            }
        })
  }
  function get_data(clicked_data,type) {
  
    $("#content-package").LoadingOverlay("show");
      var keyword=clicked_data.getAttribute("keyword")
      var page = clicked_data.getAttribute("data-ci-pagination-page");
        $.ajax({
          url: "<?php echo base_url();?>Admin/get_package/"+page+'/'+keyword,
          type: "get",
            success:function(res){
              $("#content-package").LoadingOverlay("hide", true);
              $("#content-package").html(res);
            }
        })
  }
</script>


<script>
  $('#detail').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var userid = button.data('userid');
    $.ajax( {
      type :"get",
      url : "<?php echo site_url() . '/Payment/detail_invoice/' ?>"+userid,
      cache :false,
      success : function(data) {
        $("#formdetail").html(data);
      },
      error : function() {
        alert("Error");
      }
    });
  });
</script>