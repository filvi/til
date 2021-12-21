<?php
include_once("components/head.php");
include_once("components/navbar.php");
?>

    <!-- Start: 1 Row 2 Columns -->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-md-flex align-items-center justify-content-center">
                    <div class="whitish py-5 px-5 mycard rounded">
                        <h1 class="myred-text se">Forgot password?</h1>
                        <p class="mb-4">Insert username or email to retrieve it</p>
                        <form method="post">
                            <h2 class="sr-only">Login Form</h2>
                            <div class="illustration"></div>
                            <div class="form-group"><label class="ml-1 mb-1">Username / Email</label><input class="form-control py-4" type="email" id="email" name="email" required="required" value="<?php if(isset($user)){echo $user;}?>"></div>
                            <div class="form-group d-flex align-items-center align-content-center align-self-center"><button class="btn login py-2 px-3 se pt-3 rounded font-weight-bold letter-spacing-1 fs-2 mx-auto btn-fill-red mt-2" type="submit">Send</button></div>
                        </form>
                        <div id="tape-section" class="tape-section"></div>
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center"><img src="/assets/img/4.%20Confirm.email.png?h=d5693bf772bad24751c1dcfc26a7230f"></div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <!-- Start: Footer Dark -->
    <?php include_once("components/footer.php"); ?>