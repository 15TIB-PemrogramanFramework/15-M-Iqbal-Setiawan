<?php $this->load->view('templates/kepalaAdmin'); ?>


<center>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="">
               Barang
              </h2>
             
            </a>
          </div>
          <hr>

        </div>
        <div class="col-md-12 text-right">
    <a href="<?php echo site_url('index.php/barang/add'); ?>" class="btn btn-primary" 
    style="margin-top:20px; margin-bottom:20px">
    <i class="fa fa-plus-circle"></i> Insert</a>
    </div>  
      </div>
       <table id="example" class="table table-striped table-bordered">
           <thead>
             <tr>
             <th>ID Barang</th>
             <th>Nama Barang</th>
             <th>Harga</th>
             <th>Stok</th>
             <th style="width:200px">Gambar</th>
             <th>Action</th>
             
             
             </tr>
           </thead>
           <tbody>
             <?php foreach ($barang as $key => $value){?>
              <tr>
              <td><?php echo $value->id; ?></td>
              <td><?php echo $value->namabarang; ?></td>
              <td><?php echo $value->harga; ?></td>
              <td><?php echo $value->stok; ?></td>
              <td><img style="width:200px; height:auto;" width="50%" height="50%" src="<?php echo site_url("assets/uploads/");?><?php echo $value->gambar;?>"></td>
              <td>
            <a href="<?php echo site_url('index.php/barang/delete/'.$value->id);?>"
              class="btn btn-danger" style="font-size:30px;">
              <i class="fa fa-trash"></i>
            </a>
            <BR>
            <br>
            <a href="<?php echo site_url('index.php/barang/update/'.$value->id); ?>"
              class="btn btn-warning" style="font-size:30px;">
              <i class="fa fa-pencil-square"></i>
            </a>
          </td> 
              </tr>
              <?php }?>
           </tbody>
         </table>
       
    </div>
</center>
    <hr>

   <?php $this->load->view('templates/ekor') ?>