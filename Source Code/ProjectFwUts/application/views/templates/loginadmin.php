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
         <h3 class="text-center title-login">Login Admin</h3>
         </div>

             <form action="<?php echo base_url()."index.php/loginAdmin"; ?>" class="inner-login" method="post">
             
                 <div class="form-group">
                     <input type="text" class="form-control" name="username" placeholder="username">
                 </div>
 
                 <div class="form-group">
                     <input type="password" class="form-control" name="pass" placeholder="pass">
                 </div>
                
                 <input type="submit" class="btn btn-primary btn-block" value="LOGIN" />
                 
             </form>
         </div>
     </div>
     </center>
 
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>