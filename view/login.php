<?php
include_once("components/head.php");
include_once("components/navbar.php");
?>

    <!-- Start: 1 Row 2 Columns -->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col order-sm-12 order-md-1 d-md-flex align-items-center justify-content-center">
                    <div class="align-self-center my-auto whitish py-5 px-5 mycard rounded">
                        <h1 class="myred-text se">Login</h1>
                        <p class="mb-4">Happy to see you again!</p>
                        <form method="post" action="/post-login">
                            <h2 class="sr-only">Login Form</h2>
                            <div class="illustration"></div>
                            <div class="form-group"><label class="ml-1 mb-1">Username/email</label><input class="form-control py-4" type="email" id="email" name="email" required="required" value="<?php if(isset($username)){echo $username;}?>"></div>
                            <div class="form-group"><label class="ml-1 mb-1">Password</label><input class="form-control py-4" type="password" id="password" name="password" required="required"></div>
                            <div class="form-group">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label mb-4" for="formCheck-1">Remember me</label></div>
                            </div>
                            <div class="form-group d-flex align-items-center align-content-center align-self-center"><button class="btn login py-2 px-3 se pt-3 rounded font-weight-bold letter-spacing-1 fs-2 btn-fill-red" type="submit">Done</button><a class="btn login py-2 px-3 se pt-3 rounded font-weight-bold letter-spacing-1 ml-3 btn-outline-red" role="button" href="#">Forgot password?</a></div>
                        </form>
                        <div id="tape-section" class="tape-section"></div>
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center"><img src="/assets/img/Index%20paper%20like_.png?h=721e112aa6c85a9d282483faa37189c8"></div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <?php include_once("components/footer.php"); ?>