<?php $this->load->view('templates/kepala'); ?>
<center>
<div class="container">
    
     <?php
    
     if (isset($_GET['error'])) : ?>
         <div class="alert alert-warning alert-dismissible" role="alert">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
         </div>
     <?php endif;?>
 
         <div class="outter-form-login">
         <div class="logo-login">
             <em class="glyphicon glyphicon-user"></em>
         </div>
             <form action="<?php echo base_url()."index.php/member/register"; ?>" class="inner-login" method="post">
             <h3 class="text-center title-login">Register Member</h3>
                 <div class="form-group">
                     <input type="text" class="form-control" name="username" placeholder="Username">
                 </div>
 
                 <div class="form-group">
                     <input type="password" class="form-control" name="pass" placeholder="Pass">
                 </div>
                <div class="form-group">
                     <input type="text" class="form-control" name="name" placeholder="Full Name">
                 </div>
                 <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                <input type="radio" name="jk" id="lk" value="Laki-laki" autocomplete="off" checked> Laki-laki
                 </label>
                  <label class="btn btn-primary">
                    <input type="radio" name="jk" id="pr" value="Perempuan" autocomplete="off"> Perempuan
                  </label>
                </div>

                <div class="form-group">
                     <input type="text" class="form-control" name="nohp" placeholder="No.HP">
                 </div>

                <div class="form-group">
                     <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                 </div>
                 <input type="submit" class="btn btn-primary btn-block" value="Register" />
                 <a href="<?php echo base_url()."index.php/utshome/order" ?>" class="btn btn-block btn-custom-green">Back</a>
             </form>
         </div>
     </div>
</center>
   <?php $this->load->view('templates/ekor') ?>