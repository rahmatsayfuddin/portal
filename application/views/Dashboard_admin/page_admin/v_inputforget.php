<style type="text/css">
  
  body {
    margin: 0 auto;
    background-image: url("<?php echo base_url(); ?>assets_1/css/bg.png");
    background-repeat: no-repeat;
    background-size: 110%;
    position: relative;
    font-family: 'Centuri Gothic';
  }
  .lingkaran {
    width:100px;
    height:100px;
    background-color:white;
    border-radius:50%;
    overflow:hidden;
    margin-left: 26px;
    margin-top: 21px;
  }
  .padding-top-bottom-50{
    padding-top: 50px;
    padding-bottom: 20px;
  }
</style>    
          <section id="inputpass" class="padding-top-bottom-50">  
            <div class="container">
              <div class="col-md-3">&nbsp;</div>            
              

                  <div class="col-md-6">
                    <div class="col-md-4" style="background-color: #d43539;height: 363px;opacity: 0.9;">
                      <div class="lingkaran"><img src="<?php echo base_url(); ?>assets_1/images/footer/logo_starcloud.png" class="loglogin" style="width:95px;height: 19px;margin-top:38px;margin-left: 3px"></div>
                    </div>
                    <?php echo form_open('Home/save_forget'); ?>
                    <div class="col-md-8" style="background-color: #fefefe; height: 363px;opacity: 0.9">
                      <div class="col-md-12"><h3><b>Input Your E-mail</b></h3></div>
                      
                      <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="E-mail" id="email" required="">
                      </div>
                      
                      <div class="form-group" style="margin-top: 150px">
                        <button value="Submit" class="btn btn-sm btn-danger"><b>Submit</b></button>
                      </div>
                    </div>
                    <?php echo form_close(); ?>
              </div>
              <div class="col-md-6">&nbsp;</div>
            </div>
          </section>

          <?php

          //print_r($list_user);

          ?>