</div></div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center mt-5">Sign up to TechShala for free</h1>
            <h5 class="text-center">Register in TechShala for practice and develop skills.</h5>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 ">
                <?php if ($this->session->flashdata('status')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('status'); ?> <a href="<?php echo base_url('Login/login')?>">Login</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url('SignUp/ragister');?>" method="post">
                        <div class="input-group flex-nowrap  my-3">
                            <span class="input-group-text"><i class="fa-solid fa-user fs-4"></i></span>
                            <input type="text" class="form-control" name="name" placeholder="Full Name" >
                        </div><p><?php echo form_error('name')?></p>
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-envelope fs-4"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div><p><?php echo form_error('email')?></p>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-key fs-4"></i></span>
                            <input type="Password" class="form-control" id="myInput" name="password" placeholder="Password">
                            <span class="input-group-text" onclick="myFunction()"><i class="fa-solid fa-eye fs-5"></i></span>
                        </div><p><?php echo form_error('password')?></p>
                        <div class="input-group flex-nowrap my-3">
                            <span class="input-group-text"><i class="fa-solid fa-phone-volume fs-4"></i></span>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                        </div><p><?php echo form_error('phone')?></p>
                        <button type="submit" class="btn btn-color">Ragister</button>
                    </form>
                </div>
            </div>   
        </div>
    </div>
</div>
