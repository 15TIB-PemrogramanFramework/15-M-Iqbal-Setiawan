<?php $this->load->view('templates/kepala'); ?>

<div class='container'>
<center style="background-color: rgba(175, 179, 179, 0.35);border: groove;">
<table>
<tr>
	<td rowspan="3"><img style="width:200px; height:auto;" src="<?php echo site_url("assets/uploads/");?><?php echo $barang->gambar;?>" alt="" /></td>
	<td style="padding-left:40px;"><font style="font-size:25px;">Nama Barang : <?php echo $barang->namabarang ?></font></td>

</tr>
<tr>
	<td style="padding-left:40px;"><font style="font-size:25px;">Harga Barang : Rp.<?php echo $barang->harga ?></font></td>
</tr>
<tr>
	<td style="padding-left:40px;"><font style="font-size:25px;">Stok Barang : <?php echo $barang->stok ?></font></td>
</tr>
</table>
</center>
<center>
 <div class="outter-form-login">
         <div class="logo-login">
             <em class="glyphicon glyphicon-user"></em>
         </div>
         <legend>

             <form action="<?php echo base_url()."index.php/komentar/tambahaksi"; ?>" class="inner-login" method="post">
             <br>
             <h3 class="text-center title-login">C O M M E N T</h3>
             <?php if ($this->session->userdata("nama")!=null) {
            # code...
           ?>
                 <div class="form-group" style="width:800px">
                     <input type="text-area" class="form-control" name="isi" placeholder="Comment">
                 </div>
                 <div class="form-group" style="padding-left:665px;width:800px">
                 <input type="hidden" name="username" value="<?php echo $this->session->userdata("nama");?>">
                 <input type="hidden" name="id" value="<?php echo $barang->id;?>">
                 <input type="hidden" name="kode_komentar" value="">
                 <input type="submit" class="btn btn-primary" value="Comment"/>
                 <?php }?>
                </div>
             </form>
             </legend>
         </div>
         </center>

         <center>
         <table style="width:75%">
          <?php foreach ($komentar as $key => $value){?>
         	<tr>
         		<td style="padding-top:20px;"><h4><?php echo $value->username;?> :</h4><hr></td>
         	</tr>
         	<tr>
         		<td><?php echo $value->isi;?><br><br></td>
         	</tr>
         	<?php }?>
         </table>
         </center>
     </div>

<?php $this->load->view('templates/ekor'); ?>