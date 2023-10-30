<?php
include ('config/app.php');
include ('codes/authentication_code.php');
$auth->isLoggedIn();

include ('includes/header.php');
include ('includes/navbar.php');

?>


<!--Content-->
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <?php include ('message.php') ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="name" >Full Name</label>
                                <input name="name" type="text" id="name" placeholder="Enter Your Name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" >Email Id</label>
                                <input name="email" type="email" id="email" placeholder="Enter email Id" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pwrd" >Password</label>
                                <input name="password" type="password" id="pwrd" placeholder="Enter password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pwrd" >Confirm Password</label>
                                <input name="confirm_password" type="password" id="pwrd" placeholder="Enter password" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary" value="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include ('includes/footer.php');
?>

