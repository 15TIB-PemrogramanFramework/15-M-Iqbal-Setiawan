<?php $this->load->view('templates/kepala');
$i=0; ?>
<center>
    <div class="row">
      
    <?php foreach ($barang as $key => $value){?>
      <div class="col-sm-4">
      <div class="post-preview">
        <a href="<?php echo base_url()."index.php/utshome/barang/".$value->id?>"><h3><?php echo $value->namabarang; ?></h3></a>
        </div>
        <img style="width:200px; height:auto;" src="<?php echo site_url("assets/uploads/");?><?php echo $value->gambar;?>" alt="" />

        <div class="columnLink">Rp.<?php echo $value->harga;?> <span class="order">| 

        <?php if ($this->session->userdata("nama")==null) {
          # code...
        ?>
        <a href="<?php echo base_url()."index.php/utshome/login";?>">Order? Login Now!!!</a>
        <?php }else {?>
          <a href="<?php echo base_url()."index.php/beli/tambah/".$value->id;?>">Order Now</a>
          <?php }?>
        </span> </div>
    <br><br>  
    </div>
    
    <?php } ?>
    </div>
</center>
    <hr>

   <?php $this->load->view('templates/ekor') ?>