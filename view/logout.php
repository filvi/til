<?php
include_once("components/head.php");
$_SESSION["logged"] = FALSE;
include_once("components/navbar.php");
?>

    <!-- Start: 1 Row 2 Columns -->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col order-sm-12 order-md-1 d-md-flex align-items-center justify-content-center">
                    <div class="align-self-center my-auto whitish py-5 px-5 mycard rounded">
                        <h1 class="myred-text se">Logout</h1>
                        <p class="mb-4 se">Sorry to see you leave
                            <br>
                            <br>
                            Feel free to come back when you want :)
                            <br>
                            <br>
                             un<img class="logo pb-3 d-inline-block" src="/assets/img/til_rect.png?h=c9f2fb6f4f31416c7f7314d7d8e0236d"> then... take care</p>

                        <div id="tape-section" class="tape-section"></div>
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center"><img src="/assets/img/Index%20paper%20like_.png?h=721e112aa6c85a9d282483faa37189c8"></div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <?php include_once("components/footer.php"); ?>