<?php
include_once("components/head.php");
include_once("components/navbar.php");
?>

<!-- Start: 1 Row 2 Columns -->
<div class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-12">
                <div class="whitish py-5 px-5 mycard rounded">
                    <div class="row mb-3 text-center">
                        <div class="col-6 mx-auto px-0">
                            <h1 class="myred-text se mb-0 w-100 text-center">Settings</h1>
                        </div>
                    </div>
                    <form>

                       

                        <!-- ======================== <date format> ======================== -->
                        <h4 class="text-center se my-5 myred-text">Sharing</h4>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">Default</label>
                            <label
                                class="d-flex justify-content-end align-items-center se font-weight-bold mb-0 text-right d-inline-block mx-4"
                                style="font-size: 20px;">I want to share my tils with the comunity</label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round">
                                </span>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">Info</label>
                            <label
                                class="d-flex justify-content-end align-items-center se font-weight-bold mb-0 text-right d-inline-block mx-4"
                                style="font-size: 20px;">This setting can be changed in each til.</label>
                        </div>
                        <!-- ======================== </date format> ======================== -->
                        <hr>
                        <!-- ======================== <date format> ======================== -->
                        <h4 class="text-center se my-5 myred-text">Date format</h4>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">Date</label>
                            <label
                                class="d-flex justify-content-end align-items-center se font-weight-bold mb-0 text-right d-inline-block mx-4"
                                style="font-size: 20px;">I want to use this format [mm/dd/yyyy]</label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round">
                                </span>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">Info</label>
                            <label
                                class="d-flex justify-content-end align-items-center se font-weight-bold mb-0 text-right d-inline-block mx-4"
                                style="font-size: 20px;">Default: European format [dd/mm/yyyy]</label>
                        </div>
                        <!-- ======================== </date format> ======================== -->
                        <hr>
                        <!-- ======================== <change password> ======================== -->
                        <h4 class="text-center se my-5 myred-text">Reset password</h4>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">Old p.</label>
                            <input class="form-control d-inline-block col-10 py-4" type="text">
                        </div>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">New p.</label>
                            <input class="form-control d-inline-block col-10 py-4" type="text">
                        </div>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">Repeat p.</label>
                            <input class="form-control d-inline-block col-10 py-4" type="text">
                        </div>
                        <!-- ======================== </change password> ======================== -->
                        <hr>
                        <!-- ======================== <email notification> ======================== -->
                        <h4 class="text-center se my-5 myred-text">Reminder by email</h4>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">Reminder</label>
                            <label
                                class="d-flex justify-content-end align-items-center se font-weight-bold mb-0 text-right d-inline-block mx-4"
                                style="font-size: 20px;">Stop sending me til reminders by email</label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round">
                                </span>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                                style="font-size: 30px;">Info</label>
                            <label
                                class="d-flex justify-content-end align-items-center se font-weight-bold mb-0 text-right d-inline-block mx-4"
                                style="font-size: 20px;">This action is reversible. Toggling on and off, no data will be deleted</label>
                        </div>
                        <!-- ======================== </email notification> ======================== -->
                        <hr>
                        <!-- ======================== <data delition> ======================== -->
                            <h4 class="text-center se my-5 myred-text">Delete all my data</h4>
                        <div class="form-group row">
                            <label
                            class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                            style="font-size: 30px;">Delete</label>
                            <label
                            class="d-flex justify-content-end align-items-center se font-weight-bold mb-0 text-right d-inline-block mx-4"
                            style="font-size: 20px;">Do you want to delete all the data?</label>
                            <button
                            class="btn login py-2 px-3 se pt-3 rounded font-weight-bold letter-spacing-1 fs-2 btn-fill-red"
                            type="submit">Delete everything</button>
                        </div>
                        <div class="form-group row">
                            <label
                            class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 text-right"
                            style="font-size: 30px;">Info</label>
                            <label
                            class="d-flex justify-content-end align-items-center se font-weight-bold mb-0 text-right d-inline-block mx-4"
                            style="font-size: 20px;">This action is &nbsp; <span class="se myred-text">NOT</span>&nbsp;reversible... BEWARE</label>
                        </div>
                        <hr>
                        <!-- ======================== </data delition> ======================== -->
                        <div class="text-center mt-5">
                            <button
                            class="btn login py-2 px-3 se pt-3 rounded font-weight-bold letter-spacing-1 fs-2 btn-fill-red"
                            type="submit">Save settings!</button>
                            <button
                            class="btn login pb-2 px-3 se pt-3 rounded border-2 font-weight-bold letter-spacing-1 ml-3 btn-outline-red"
                            type="reset">Reset default</button>
                        </div>
                    </form>
                    <div id="tape-section" class="tape-section">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 2 Columns -->
    <?php include_once("components/footer.php"); ?>

    <!-- TODO inserire che pagina vedere di default dopo essersi loggati -->