The MIT License (MIT)


Copyright (c) 2013-2017 Blackrock Digital LLC


Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>I-WP</title>
    

    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url() ?>assets/universal/css/style.css" rel="stylesheet" type="text/css" />






    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()."assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for <th></th>is template -->
    <link href="<?php echo base_url()."assets/"; ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()."assets/"; ?>css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url()."index.php/utshome/order"; ?>">Order I-WP</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <?php if ($this->session->userdata("nama")==null) {
            # code...
           ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()."index.php/utshome/login"; ?>">Login</a>
            </li>
            <?php }?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()."index.php/utshome/order"; ?>">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()."index.php/utshome/Ulist"; ?>">List Item</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()."index.php/utshome/contact"; ?>">Contact</a>
            </li>
             <?php if ($this->session->userdata("nama")!=null) {
            # code...
           ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()."index.php/utshome/status/".$this->session->userdata("nama"); ?>">Status Pembelian</a>
            </li>
            <?php }?>
          </ul>

          <?php if ($this->session->userdata("nama")!=null) {
            # code...
           ?>
          <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href=""><?php echo $this->session->userdata("nama");?>
              <i class="fa fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="<?php echo site_url('index.php/login/logout'); ?>" style="color:black;"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
              </li>
            </ul>
            <!-- /.dropdown-user -->
          </li>
          <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
        <?php } ?>

        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url()."assets/"; ?>img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Order I-WP</h1>
              <span class="subheading">just for order I-Watch & I-Phone</span>
            </div>
          </div>
        </div>
      </div>
    </header>