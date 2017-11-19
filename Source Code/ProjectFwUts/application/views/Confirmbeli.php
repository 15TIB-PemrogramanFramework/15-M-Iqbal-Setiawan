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
             <form action="<?php echo $aksi;?>" class="inner-login" method="post">
             <h3 class="text-center title-login">Confirm Beli</h3>
             <h4>Harga : <?php echo $harga?></h4>
                             

                
                     <input type="hidden" name="kode_beli" value="<?php echo $kode_beli;?>">
                     <input type="hidden" name="username" value="<?php echo $username;?>">
                     <input type="hidden" name="id" value="<?php echo $id;?>">
                     <input type="hidden" name="jumlah" value="<?php echo $jumlah;?>">
                     <input type="hidden" name="harga" value="<?php echo $harga;?>">
                     <input type="hidden" name="status" value="<?php echo $status;?>">

                 <input type="submit" class="btn btn-primary btn-block" value="Confirm" />
                 <a href="<?php echo base_url()."index.php/utshome/order" ?>" class="btn btn-block btn-custom-green">Back</a>
             </form>
         </div>
     </div>
</center>
   <?php $this->load->view('templates/ekor') ?>