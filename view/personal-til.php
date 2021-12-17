<?php
include_once("components/head.php");
include_once("components/navbar.php");

$type = "private";
?>

    <!-- Start: 1 Row 2 Columns -->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="whitish py-5 px-sm-0 mx-sm-0 px-md-5 mycard rounded shadow">
                <div class="row mx-2">
                    <div class="col-auto flex-grow-1 px-0">
                        <h1 class="myred-text se mb-0 w-100 d-inline-block ml-0 px-0">My&nbsp;<img class="logo pb-3 d-inline-block" src="/assets/img/til_rect.png?h=c9f2fb6f4f31416c7f7314d7d8e0236d">meline<br></h1>
                    </div>
                    <div class="col d-xl-flex justify-content-xl-end align-items-xl-center"><label class="mr-2 mb-0 se mt-1" style="font-size:20px;">Search</label><input type="search" class="d-inline-block outline-none py-2 border rounded"></div>
                </div>
                <?php
                include("components/til_entry.php");
                include("components/til_entry.php");
                include("components/til_entry.php");
                ?>

                <div id="tape-section" class="tape-section"></div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <?php include_once("components/footer.php"); ?>