</div></div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 ">
                <h1 class="text-center mt-5">Login Here</h1>
                <hr class="mb-5">
                    <form action="<?php echo base_url('Login/user')?>" method="post">
                        <div class="input-group flex-nowrap mb-3">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-envelope fs-4"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div><p><?php echo form_error('email')?></p>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-key fs-4"></i></span>
                            <input type="Password" name="password" class="form-control" id="myInput" placeholder="Password">
                            <span class="input-group-text" ><i class="fa-solid fa-eye fs-5" onclick="myFunction()"></i></span>
                        </div><p><?php echo form_error('password')?></p>
                        <table class="table table-borderless">
                        <tr>
                            <td><input type="checkbox" name="" id=""> Remember Me</td>
                            <td class="text-end">
                                <a href="http://" style="text-decoration:none">Forget Password ?</a>
                            </td>
                        </tr>
                        </table>
                        <button type="submit" class="btn btn-color">Log In</button>
                    </form>
                    <div class="my-5">
                        <h6><a href="<?php echo base_url('SignUp/addUser');?>">Ragister</a> If you don't have an account</h6>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
