    </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url(); ?>assets_2/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url(); ?>assets_2/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets_2/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets_2/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets_2/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="<?php echo base_url(); ?>assets_2/js/plugins/icheck/icheck.min.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets_2/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets_2/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/nvd3/lib/d3.v3.js"></script>        
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/nvd3/nv.d3.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->

        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->
        
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url() ?>assets_2/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url() ?>assets_2/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>                
        <script type='text/javascript' src="<?php echo base_url() ?>assets_2/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/settings.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/actions.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/demo_tables.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/demo_dashboard.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/demo_charts_nvd3.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets_2/js/file_admin.js"></script>
        <!-- END TEMPLATE -->
        <script>
            $("#pc_refresh").click(function(){                                        
                function p_refresh_shown(){
                    alert("shown");
                    panel_refresh($("#pc_refresh").parents(".panel"),"hidden",function(){alert("hidden")});
                }
                panel_refresh($("#pc_refresh").parents(".panel"),"shown",p_refresh_shown);

            });                         
            
            $("#pc_collapse").click(function(){                                        
                function p_collapse_hidden(){                                            
                    alert("hidden");                                            
                    panel_collapse($("#pc_collapse").parents(".panel"),"shown",function(){alert('shown')});
                }
                panel_collapse($("#pc_collapse").parents(".panel"),"hidden",p_collapse_hidden);
            });           
            
            $("#pc_remove").click(function(){                                        
                function p_remove_before(){
                    alert("before");
                    panel_remove($("#pc_remove").parents(".panel"),"after",function(){alert("after")});
                }
                panel_remove($("#pc_remove").parents(".panel"),"before",p_remove_before);

            });                 
        </script>
    <!-- END SCRIPTS -->
<script type="text/javascript">
        
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

  $( document ).ready(function() {
    
    //==========================================================================================
    $("#content-customer").LoadingOverlay("show");
    $("#content-invoice").LoadingOverlay("show");
    $("#content-product").LoadingOverlay("show");
    $("#content-package").LoadingOverlay("show");
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataCustomers/1",
      type: "get",
      success:function(res){
        $("#content-customer").LoadingOverlay("hide", true);
        $("#content-customer").html(res);
      }
    })
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataInvoice/1",
      type: "get",
      success:function(res){
        $("#content-invoice").LoadingOverlay("hide", true);
        $("#content-invoice").html(res);
      }
    })
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataProduct/1",
      type: "get",
      success:function(res){
        $("#content-product").LoadingOverlay("hide", true);
        $("#content-product").html(res);
      }
    })
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataPackage/1",
      type: "get",
      success:function(res){
        $("#content-package").LoadingOverlay("hide", true);
        $("#content-package").html(res);
      }
    })
  });
  function search(type) {
    if (type=='Customer'){
      $("#content-customer").LoadingOverlay("show");
      var keyword = $("#search-customer").val();
      var page = 1;
      $.ajax({
        url: "<?php echo base_url();?>/Admin/DataCustomers/"+page+'/'+keyword,
        type: "get",
        success:function(res){
          $("#content-customer").LoadingOverlay("hide", true);
          $("#content-customer").html(res);
        }
      })
    }
    else if (type=='Invoice'){
      $("#content-invoice").LoadingOverlay("show");
      var keyword = $("#search-invoice").val();
      var page = 1;
      $.ajax({
        url: "<?php echo base_url();?>/Admin/DataInvoice/"+page+'/'+keyword,
        type: "get",
        success:function(res){
          $("#content-invoice").LoadingOverlay("hide", true);
          $("#content-invoice").html(res);
        }
      })
    }
    else if (type=='Product'){
      $("#content-product").LoadingOverlay("show");
      var keyword = $("#search-prduct").val();
      var page = 1;
      $.ajax({
        url: "<?php echo base_url();?>/Admin/DataProduct/"+page+'/'+keyword,
        type: "get",
        success:function(res){
          $("#content-product").LoadingOverlay("hide", true);
          $("#content-product").html(res);
        }
      })
    }
    else if (type=='Package'){
      $("#content-package").LoadingOverlay("show");
      var keyword = $("#search-package").val();
      var page = 1;
      $.ajax({
        url: "<?php echo base_url();?>/Admin/DataPackage/"+page+'/'+keyword,
        type: "get",
        success:function(res){
          $("#content-package").LoadingOverlay("hide", true);
          $("#content-package").html(res);
        }
      })
    }
  }
  function refresh(type) {
   if (type=='Customer'){
    $("#content-customer").LoadingOverlay("show");
    $("#search-customer").val("");
    var page = 1;
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataCustomers/"+page,
      type: "get",
      success:function(res){
        $("#content-customer").LoadingOverlay("hide", true);
        $("#content-customer").html(res);
      }
    })
  }
  else if (type=='Invoice'){
    $("#content-invoice").LoadingOverlay("show");
    $("#search-invoice").val("");
    var page = 1;
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataInvoice/"+page,
      type: "get",
      success:function(res){
        $("#content-invoice").LoadingOverlay("hide", true);
        $("#content-invoice").html(res);
      }
    })
  }
  else if (type=='Product'){
    $("#content-product").LoadingOverlay("show");
    $("#search-product").val("");
    var page = 1;
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataProduct/"+page,
      type: "get",
      success:function(res){
        $("#content-product").LoadingOverlay("hide", true);
        $("#content-product").html(res);
      }
    })
  }
  else if (type=='Package'){
    $("#content-package").LoadingOverlay("show");
    $("#search-package").val("");
    var page = 1;
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataPackage/"+page,
      type: "get",
      success:function(res){
        $("#content-package").LoadingOverlay("hide", true);
        $("#content-package").html(res);
      }
    })
  }
}
function get_data(clicked_data,type) {
  if (type=='Customer'){
    $("#content-customer").LoadingOverlay("show");
    var keyword=clicked_data.getAttribute("keyword")
    var page = clicked_data.getAttribute("data-ci-pagination-page");
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataCustomers/"+page+'/'+keyword,
      type: "get",
      success:function(res){
        $("#content-customer").LoadingOverlay("hide", true);
        $("#content-customer").html(res);
      }
    })
  }
  else if (type=='Invoice'){
    $("#content-invoice").LoadingOverlay("show");
    var keyword=clicked_data.getAttribute("keyword")
    var page = clicked_data.getAttribute("data-ci-pagination-page");
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataPackage/"+page+'/'+keyword,
      type: "get",
      success:function(res){
        $("#content-invoice").LoadingOverlay("hide", true);
        $("#content-invoice").html(res);
      }
    })
  }
  else if (type=='Product'){
    $("#content-product").LoadingOverlay("show");
    var keyword=clicked_data.getAttribute("keyword")
    var page = clicked_data.getAttribute("data-ci-pagination-page");
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataProduct/"+page+'/'+keyword,
      type: "get",
      success:function(res){
        $("#content-product").LoadingOverlay("hide", true);
        $("#content-product").html(res);
      }
    })
  }
  else if (type=='Package'){
    $("#content-package").LoadingOverlay("show");
    var keyword=clicked_data.getAttribute("keyword")
    var page = clicked_data.getAttribute("data-ci-pagination-page");
    $.ajax({
      url: "<?php echo base_url();?>/Admin/DataPackage/"+page+'/'+keyword,
      type: "get",
      success:function(res){
        $("#content-package").LoadingOverlay("hide", true);
        $("#content-package").html(res);
      }
    })
  }
}

  $('#detail').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var invoice = button.data('invoice');
    $.ajax( {
      type :"get",
      url : "<?php echo site_url() . '/Manage/detail_invoice/' ?>"+invoice,
      cache :false,
      success : function(data) {
        $("#formdetail").html(data);
      },
      error : function() {
        alert("Error");
      }
    });
  });


  $('#detail_hotel').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var invoice = button.data('invoice');
    $.ajax( {
      type :"get",
      url : "<?php echo site_url() . '/Manage/detail_hotel/' ?>"+invoice,
      cache :false,
      success : function(data) {
        $("#formdetailhotel").html(data);
      },
      error : function() {
        alert("Error");
      }
    });
  });

    </script>         
    </body>
</html>