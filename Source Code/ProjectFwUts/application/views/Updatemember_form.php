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
        
        <input type="text" name="username" class="form-control" placeholder="Username" 
        required value="<?php echo $username; ?>" readonly>
      </div>
      <div class="form-group">
        
        <input type="text" name="password" class="form-control" placeholder="Password" 
        required value="<?php echo $password; ?>">
      </div>
      <div class="form-group">
       
        <input type="text" name="nama" class="form-control" placeholder="Full Name" 
        required value="<?php echo $nama; ?>">
      </div>
      <div class="btn-group" data-toggle="buttons">
      <label class="btn btn-primary active">
      <input type="radio" name="jk" id="lk" value="Laki-laki" <?php if($jk=='Laki-laki'){ ?> checked <?php } ?>> Laki-laki
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="jk" id="pr" value="Perempuan" <?php if($jk=='Perempuan'){ ?> checked <?php } ?>> Perempuan
         </label>
      </div>

      <div class="form-group">
       
        <input type="text" name="nohp" class="form-control" placeholder="No.Hp" 
        required value="<?php echo $nohp; ?>">
      </div>
      <div class="form-group">
       
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" 
        required value="<?php echo $alamat; ?>">
      </div>     
      
       <input type="submit" class="btn btn-primary btn-block" value="Submit" />
      <a href="<?php echo site_url('utshomeadmin/member')?>" class="btn btn-default">Cancel</a>
    </form>
    </div>

   <?php $this->load->view('templates/ekor') ?>