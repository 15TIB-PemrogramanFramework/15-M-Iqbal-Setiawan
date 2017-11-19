<?php $this->load->view('templates/kepala'); ?>
<center>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="">
              <h2 class="post-title">
              Want Some Order ?
              </h2>
              
            </a>
          </div>
          <hr>
         
        </div>
      </div>
    </div>
</center>
    <hr>
    <center>
    <?php if ($this->session->userdata("nama")==null) {
            # code...
           ?>
<center>
    
     
        <div style="border-radius:50%;width: 130px;height: 130px;border: 2px solid;padding-top:10px;">
          <div class="post-preview">
            <a href="<?php echo base_url()."index.php/utshome/login" ?>">
            <i class="fa fa-user-o" style="font-size:100px;"></i>
              <h3>
              LOGIN
              </h3>
              
            </a>
          </div>
          </div>
         
        
      
</center>


   <?php } else{?>
    <center>
    
     
        <div style="border-radius:50%;width: 130px;height: 130px;border: 2px solid;padding-top:10px;">
          <div class="post-preview">
            <a href="<?php echo base_url()."index.php/beli/tambah1" ?>">
            <i class="fa fa-shopping-cart" style="font-size:100px;"></i>
              <h3>
              ORDER
              </h3>
              
            </a>
          </div>
         </div>
        
      
</center>
    <?php }?>
    </center>
    <br>
    <br>
    <br>
   <?php $this->load->view('templates/ekor') ?>