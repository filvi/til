<?php
include_once("components/head.php");
include_once("components/navbar.php");
?>

    <!-- Start: 1 Row 2 Columns -->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col d-none d-md-flex align-items-center justify-content-center"><img src="/assets/img/03.Signup_paper.png?h=1541d6847b146756782cc9eff1a6fbf6"></div>
                <div class="col d-md-flex align-items-center justify-content-center">
                    <div class="align-self-center my-auto whitish py-5 px-5 mycard rounded">
                        <h1 class="myred-text se">Sign Up</h1>
                        <p class="mb-4">Just a couple of info to start your journey with us</p>
                        <form method="post">
                            <h2 class="sr-only">Login Form</h2>
                            <div class="illustration"></div><div class="form-group">
        <label class="ml-1 mb-1">Username</label>   
<div class="input-group mb-2">
    <input minlength="3" type="text" class="form-control py-4" id="name" name="name" required="required" />
    <div class="input-group-append">
        <span class="input-group-text" id="basic-addon2">
            <h4 class="mb-0">
                <i class="myred-grey fas fa-check-circle"></i>
                <i class="myred-text fas fa-times-circle"></i> 
            </h4>
        </span>
    </div>
</div>
    
</div>
                            <div class="form-group mb-2"><label class="ml-1 mb-1">Email</label><input class="form-control py-4" type="email" id="email" name="email" required="required"></div>
                            <div class="form-group mb-2"><label class="ml-1 mb-1">Password</label><small class="form-text text-muted mb-2 ml-2 d-inline-block">[ Try using a different password than usual ]</small><input class="form-control py-4" type="password" id="password" name="password" required="required"></div>
                            <div class="form-group mb-2"><label class="ml-1 mb-1">Confirm Password</label><input class="form-control py-4" type="password" id="confirm-password" name="confirm-password" required="required"></div>
                            <div class="form-group mt-3 mb-4 ml-1">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" required="required"><label class="form-check-label" for="formCheck-1">I accept the term and conditions<a class="ml-2 myred-text" href="#">[ View Document ]</a></label></div>
                            </div>
                            <div class="form-group d-flex d-xl-flex align-items-center align-content-center align-self-center"><button class="btn login py-2 px-3 border myred-bg text-white myred-border border se pt-3 rounded border-2 font-weight-bold letter-spacing-1 fs-2" type="submit">Done</button><button class="btn login py-2 px-3 border myred-border myred-text se pt-3 rounded border-2 font-weight-bold letter-spacing-1 ml-3 fs-2" type="reset">Reset Fields</button></div>
                        </form>
                        <div id="tape-section" class="tape-section"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <?php include_once("components/footer.php"); ?>