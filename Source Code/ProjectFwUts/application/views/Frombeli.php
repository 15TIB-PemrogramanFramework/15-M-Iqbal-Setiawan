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
             <h3 class="text-center title-login">Beli Barang</h3>
                 <div class="form-group">
                     <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $this->session->userdata("nama");?>" readonly>
                 </div>
 
                 <div class="form-group">
                     <select class="form-control" name="namabarang">
                     <?php foreach ($id as $row => $value) {
                        if ($namabarang==$value->id) {
                        ?>
                         <option selected value="<?php echo $value->id;?>"><?php echo $value->namabarang;?></option> 
                         <?php }else{?>
                        <option value="<?php echo $value->id;?>"><?php echo $value->namabarang;?></option> 
                     <?php }} ?>
                     </select>
                 </div>

                <div class="form-group">
                     <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
                 </div>

                
                     <input type="hidden" name="kode_beli" value="<?php echo $kode_beli;?>">
                     <input type="hidden" name="status" value="Pending">
                 
                 <input type="submit" class="btn btn-primary btn-block" value="Buy" />
                 <a href="<?php echo base_url()."index.php/utshome/order" ?>" class="btn btn-block btn-custom-green">Back</a>
             </form>
         </div>
     </div>
</center>
   <?php $this->load->view('templates/ekor') ?>