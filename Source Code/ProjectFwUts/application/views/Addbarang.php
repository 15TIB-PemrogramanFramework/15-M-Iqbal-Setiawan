<?php $this->load->view('templates/kepalaAdmin'); ?>


<center>
<center>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="">
              <h2 class="post-title">
               Add Item
              </h2>
              
            </a>
          </div>
          <hr>
         
        </div>
      </div>
      <form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        
        <input type="text" name="id" class="form-control" placeholder="Id Barang" 
        required value="<?php echo $idb; ?>">
      </div>
      <div class="form-group">
        
        <input type="text" name="nama" class="form-control" placeholder="Nama Barang" 
        required value="<?php echo $namab; ?>">
      </div>
      <div class="form-group">
       
        <input type="text" name="harga" class="form-control" placeholder="Harga Barang" 
        required value="<?php echo $hargab; ?>">
      </div>
      <div class="form-group">
        
        <input type="text" name="stok" class="form-control" placeholder="Stok Barang" 
        required value="<?php echo $stokb; ?>">
      </div>
      <div class="form-group">
        Gambar Barang
        <input type="file" name="gambar" class="form-control">
      </div>
      
       <input type="submit" class="btn btn-primary btn-block" value="Submit" />
      <a href="<?php echo site_url('index.php/utshomeadmin/barang')?>" class="btn btn-default">Cancel</a>
    </form>
    </div>

   <?php $this->load->view('templates/ekor') ?>