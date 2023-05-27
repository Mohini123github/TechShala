<!doctype html>
<html lang="en">
  <head>
    <base href="<?php echo base_url('assets/');?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechShala</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 banner p-0">
                <!-- navbar -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="container">
                                        <a class="navbar-brand" href="<?php echo base_url();?>"><img src="img/techshala.png" alt=""></a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <?php if($this->session->userdata('id')){?>
                                                <?php if($this->session->userdata('type') == 'user'){?>
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Dashboard/user');?>">Dashboard</a>
                                                </li>
                                                <?php }elseif($this->session->userdata('type') == 'admin'){?>
                                                    <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('Dashboard/admin');?>">Dashboard</a>
                                                </li>
                                                    <?php }?>
                                            <?php } else{ ?>
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Home</a>
                                                </li>
                                            <?php } ?>
                                            <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('Welcome/aboutus');?>">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('Welcome/contactus');?>">Contact Us</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url('Welcome/help');?>">Help</a>
                                            </li>
                                        </ul>
                                        <?php if($this->session->userdata('id')){?>
                                            <form class="d-flex" role="search">
                                                <a href="<?php echo base_url('Dashboard/logout');?>" class="btn btn-log m-1">Log Out</a>
                                            </form>
                                        <?php }else{?>
                                        <form class="d-flex" role="search">
                                            <a href="<?php echo base_url('Login/login');?>" class="btn btn-log m-1">Log In</a>
                                            <a href="<?php echo base_url('SignUp/addUser');?>" class="btn btn-color m-1">Sign Up</a>
                                        </form>
                                        <?php }?>
                                        </div>
                                    </div>
                </nav>
                <!-- navbar end -->
          

    