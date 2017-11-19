<?php $this->load->view('templates/kepalaAdmin'); ?>
<center>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="">
               Data Pembelian Pending
              </h2>
             
            </a>
          </div>
          <hr>

        </div>
      </div>
       <table id="example" class="table table-striped table-bordered">
           <thead>
             <tr>
             <th>Nama</th>
             <th>Barang</th>
             <th>Jumlah Barang</th>
             <th>Harga Barang</th>
             <th>Status</th>
             <th>Action</th>
             
             </tr>
           </thead>
           <tbody>
             <?php foreach ($beli as $key => $value){
              $member = $this->db->get_where('member', array('username' => $value->username))->row();
              $barang = $this->db->get_where('barang', array('id' => $value->id))->row();
              ?>
              <tr>
              <td><?php echo $member->nama;?></td>
              <td><?php echo $barang->namabarang;?></td>
              <td><?php echo $value->jumlah; ?></td>
              <td><?php echo $value->harga; ?></td>
              <td><?php echo $value->status; ?></td>
              
               <td>
            <a href="<?php echo site_url('index.php/beli/delete/'.$value->kode_beli);?>"
              class="btn btn-danger" style="font-size:20px;padding: 10px;">
              <i class="fa fa-trash"></i>
            </a><a href="<?php echo site_url('index.php/beli/update_aksi_completed/'.$value->kode_beli.'/'.$value->jumlah.'/'.$barang->stok.'/'.$value->id); ?>"
              class="btn btn-warning" style="font-size:20px;padding: 10px;">
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
<br>
<br>
<br>
    <center>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="">
               Data Pembelian Completed
              </h2>
             
            </a>
          </div>
          <hr>

        </div>
      </div>
       <table id="example" class="table table-striped table-bordered">
           <thead>
             <tr>
             <th>Nama</th>
             <th>Barang</th>
             <th>Jumlah Barang</th>
             <th>Harga Barang</th>
             <th>Status</th>
             <th>Action</th>
             
             </tr>
           </thead>
           <tbody>
             <?php foreach ($beli1 as $key => $value){
              $member = $this->db->get_where('member', array('username' => $value->username))->row();
              $barang = $this->db->get_where('barang', array('id' => $value->id))->row();
              ?>
              <tr>
              <td><?php echo $member->nama;?></td>
              <td><?php echo $barang->namabarang;?></td>
              <td><?php echo $value->jumlah; ?></td>
              <td><?php echo $value->harga; ?></td>
              <td><?php echo $value->status; ?></td>
              
               <td>
            <a href="<?php echo site_url('index.php/beli/delete/'.$value->kode_beli);?>"
              class="btn btn-danger" style="font-size:20px;padding: 10px;">
              <i class="fa fa-trash"></i>
            </a><a href="<?php echo site_url('index.php/beli/update_aksi_pending/'.$value->kode_beli.'/'.$value->jumlah.'/'.$barang->stok.'/'.$value->id); ?>"
              class="btn btn-warning" style="font-size:20px;padding: 10px;">
              <i class="fa fa-pencil-square"></i>
            </a>
          </td> 
              </tr>
              <?php }?>
           </tbody>
         </table>
         
    </div>
</center>

   <?php $this->load->view('templates/ekor') ?>