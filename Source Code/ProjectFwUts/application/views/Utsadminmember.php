<?php $this->load->view('templates/kepalaAdmin'); ?>
<center>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="">
               Member
              </h2>
             
            </a>
          </div>
          <hr>

        </div>
      </div>
       <table id="example" class="table table-striped table-bordered">
           <thead>
             <tr>
             <th>Username</th>
             <th>Password</th>
             <th>Nama</th>
             <th>JK</th>
             <th>No.Hp</th>
             <th>Alamat</th>
             <th>Action</th>
             
             </tr>
           </thead>
           <tbody>
             <?php foreach ($member as $key => $value){?>
              <tr>
              <td><?php echo $value->username; ?></td>
              <td><?php echo $value->password; ?></td>
              <td><?php echo $value->nama; ?></td>
              <td><?php echo $value->jk; ?></td>
              <td><?php echo $value->nohp; ?></td>
              <td><?php echo $value->alamat; ?></td>
               <td>
            <a href="<?php echo site_url('index.php/member/delete/'.$value->username);?>"
              class="btn btn-danger" style="font-size:20px;padding: 10px;">
              <i class="fa fa-trash"></i>
            </a><a href="<?php echo site_url('index.php/member/update/'.$value->username); ?>"
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

   <?php $this->load->view('templates/ekor') ?>