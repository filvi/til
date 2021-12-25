<?php
include_once("components/head.php");
include_once("components/navbar.php");


include_once("controller/Database.php");
$settings = Database::get_settings($_SESSION["username"]);


?>

<div id="alert-container" class="justify-content-center align-items-center">
    <p class="text-white se mb-0">All changes have been saved</p><i onclick="hide_alert()" class="fas fa-times-circle  text-white alert-close ml-2" id="alert-close"></i>
</div>
<!-- Start: 1 Row 2 Columns -->
<div class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-12">
                <div class="whitish py-5 px-5 mycard rounded">
                    <div class="row mb-3 text-center">
                        <div class="col-6 mx-auto px-0">
                            <?php
                            if (isset($first_time)){
                                echo '<h1 class="myred-text se mb-0 w-100 text-center">Welcome</h1>
                                <h6 class="text-center se mb-5 mygray-text"> Let\'s set things up real quick</h6>';
                            } else {
                                echo '<h1 class="myred-text se mb-0 w-100 text-center">Settings</h1>';
                            }
                            ?>
                            
                        </div>
                    </div>
                    <form>
                        
                        <!-- ============== <default page after login>  ===================== -->
                        <h4 class="text-center se my-5 myred-text">Default page after login</h4>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 offset-2 text-right"
                                >Choose</label>
                            <select onchange="update_settings(this, this.value)" name="after_login" class="form-control d-inline-block col-6">
                                <option class="py-4" <?php if($settings["after_login"] == "new"){echo "selected";}  ?> value="new"  selected>New TIL</option>
                                <option class="py-4" <?php if($settings["after_login"] == "home"){echo "selected";}  ?> value="home">Homepage</option>
                                <option class="py-4" <?php if($settings["after_login"] == "public"){echo "selected";}  ?> value="public">Public til</option>
                                <option class="py-4" <?php if($settings["after_login"] == "my_stuff"){echo "selected";}  ?> value="my_stuff">My stuff</option>
                            </select>
                            </div>


                        <!-- ======================== <public tils> ======================== -->
                        <h4 class="text-center se my-5 myred-text">Sharing</h4>
                        <div class="row">
                            <div class="col-6">      
                                <div class="d-flex align-items-center">
                                    <h5 class="se font-weight-bold mx-4" >Make my TILS public by default</h5>
                                    <label class="switch ml-4 ">
                                        <input type="checkbox" onchange="update_settings(this)" <?php if($settings["public"]){echo 'checked="checked"';}?> name="public" value="non so">
                                        <span class="slider round">
                                        </span>
                                    </label>
                                </div>
                                <p class="mx-4" > <i class="fas fa-info-circle info_icon mr-2 mygrey2-text"></i>This setting can be changed in each til.</p>
                            </div>
                            <div class="col-6">      
                                <div class="d-flex align-items-center">
                                    <h5 class="se font-weight-bold mx-4" >Make my TILS anonymous by default</h5>
                                    <label class="switch ml-4 ">
                                        <input type="checkbox" onchange="update_settings(this)" <?php if($settings["anonymous"]){echo 'checked="checked"';}?> name="anonymous" value="non so">
                                        <span class="slider round">
                                        </span>
                                    </label>
                                </div>
                                <p class="mx-4" > <i class="fas fa-info-circle info_icon mr-2 mygrey2-text"></i>This setting can be changed in each til.</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2"></label>
                        </div>
                        <!-- ================================================================ -->
                        
                        <hr>
                        <!-- ======================== <date format> ======================== -->
                        <h4 class="text-center se my-5 myred-text">Date format</h4>
                        <div class="row">
                            <div class="col-6 offset-3">      
                                <div class="d-flex align-items-center">
                                    <h5 class="se font-weight-bold mx-4">Use mm/dd/yyyy [USA]</h5>
                                    <label class="switch ml-4 ">
                                        <input type="checkbox" onchange="update_settings(this)" <?php if($settings["us_date"]){echo 'checked="checked"';}?> name="us_date" value="non so">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <p class="mx-4" > <i class="fas fa-info-circle info_icon mr-2 mygrey2-text"></i>Default dd/mm/yyy [EU]</p>
                            </div>
                        </div>
                        <!-- ================================================================ -->
                                
                        <hr>
                        <!-- ======================== <email notification> ======================== -->
                        <h4 class="text-center se my-5 myred-text">Reminder by email</h4>
                        <div class="row">
                            <div class="col-6 offset-3">      
                                <div class="d-flex align-items-center">
                                    <h5 class="se font-weight-bold mx-4">Stop sending me til reminders by email</h5>
                                    <label class="switch ml-4 ">
                                        <input type="checkbox" onchange="update_settings(this)" <?php if($settings["reminder"]){echo 'checked="checked"';}?> name="reminder" value="non so">
                                        <span class="slider round">
                                        </span>
                                    </label>
                                </div>
                                <p class="mx-4" > <i class="fas fa-info-circle info_icon mr-2 mygrey2-text"></i>This action is reversible. Toggling on and off, no data will be deleted</p>
                            </div>
                        </div>
                        <!-- ================================================================= -->

                        <!-- ================================================================ -->   
                        <? if(!isset($first_time)){?>
                        <hr>
                        <!-- ======================== <change password> ======================== -->
                        <h4 class="text-center se my-5 myred-text">Reset password</h4>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 offset-2 text-right"
                                >Old password</label>
                            <input class="form-control d-inline-block col-5 py-4" type="text">
                        </div>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 offset-2 text-right"
                                >New password</label>
                            <input class="form-control d-inline-block col-5 py-4" type="text">
                        </div>
                        <div class="form-group row">
                            <label
                                class="d-flex justify-content-end align-items-center mygrey-text se font-weight-bold mb-0 col-2 offset-2 text-right"
                                >Repeat password</label>
                            <input class="form-control d-inline-block col-5 py-4" type="text">
                        </div>
                        <!-- ======================== </change password> ======================== -->


                        
                        <hr>
                        <!-- ======================== <Delete all data> ======================= -->
                        <h4 class="text-center se my-5 myred-text">Delete all my data</h4>
                        <div class="row">
                            <div class="col-6 offset-3">      
                                <div class="d-flex align-items-center">
                                    <h5 class="se font-weight-bold mx-4">Do you want to delete all the data?</h5>
                                </div>
                                <p class="mx-4" > <i class="fas fa-info-circle info_icon mr-2 mygrey2-text"></i>This action is &nbsp; <span class="se myred-text">NOT</span>&nbsp;reversible... BEWARE</p>
                                <div class="row">
                                    <button class="btn login py-2 px-3 se pt-3 rounded font-weight-bold letter-spacing-1 fs-2 btn-fill-red mx-auto" type="submit">Delete everything</button>                            
                                </div>
                            </div>
                        </div>
                        <!-- ================================================================= -->
                        <?php }?>
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