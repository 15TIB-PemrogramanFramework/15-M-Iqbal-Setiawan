<?php $this->load->view('templates/kepala'); ?>
<center>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="">
               Status Pembelian
              </h2>
             
            </a>
          </div>
          <hr>

        </div>
      </div>
       <table id="example" class="table table-striped table-bordered">
           <thead>
             <tr>
             
             <th>Barang</th>
             <th>Harga</th>
             <th>Status</th>
             
             
             </tr>
           </thead>
           <tbody>
             <?php foreach ($data as $key => $value){
              $member = $this->db->get_where('member', array('username' => $value->username))->row();
              $barang = $this->db->get_where('barang', array('id' => $value->id))->row();
              ?>
              <tr>
              <td><?php echo $barang->namabarang;?></td>
              <td><?php echo $value->harga; ?></td>
              <td><?php echo $value->status; ?></td> 
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
            
          </div>
          <hr>

        </div>
      </div>
      
         
    </div>
</center>

   <?php $this->load->view('templates/ekor') ?>