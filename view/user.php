<?php
include_once("components/head.php");
include_once("components/navbar.php");

?>

    <!-- Start: 1 Row 2 Columns -->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="whitish py-5 px-sm-0 mx-sm-0 px-md-5 mycard rounded shdow">
                <div class="row mx-2">
                    <div class="col-auto flex-grow-1 px-0">
                        <h1 class="myred-text se mb-0 w-100 d-inline-block ml-0 px-0"><?php echo "$q's";?>&nbsp;<img class="logo pb-3 d-inline-block" src="/assets/img/til_rect.png?h=c9f2fb6f4f31416c7f7314d7d8e0236d">meline<br></h1>
                    </div>
                    <div class="col d-xl-flex justify-content-xl-end align-items-xl-center"><label class="mr-2 mb-0 se mt-1" style="font-size:20px;">Search</label><input type="search" class="d-inline-block outline-none py-2 border rounded"></div>
                </div>
                <div class="row my-3 mx-2">
                    <div class="col-auto d-inline-block mx-0 px-0">
                        <div id="buttons-3" class="mx-0 px-0 w-100 d-flex my-2">
                            <div class="d-xl-flex flex-grow-1 align-items-center bg-white border rounded d-inline-block til-date mr-1 border-3 rounded">
                                <p class="mb-0 text-center d-inline-block mx-auto px-1">01.06.2020</p>
                            </div>
                            <div class="d-flex w-100">
                                <div class="mx-1 align-self-end"><button class="btn btn-primary edit-btn rounded d-inline-block align-self-center mx-0 px-2 py-2 btn-outline-teal" type="button"><i class="fa fa-pencil"></i></button></div>
                                <div class="ml-1 align-self-end"><button class="btn btn-primary font-weight-bold delete-btn rounded bg-transparent border-3 d-inline-block align-self-center px-2 py-2 btn-outline-red" type="button"><i class="fa fa-trash"></i></button></div>
                            </div>
                        </div>
                        <div class="justify-content-between d-flex my-2" id="buttons-2">
                            <div class="mr-1"><button class="btn btn-primary til-button-active font-weight-bold px-2 py-2" type="button">D</button></div>
                            <div class="mx-1"><button class="btn btn-primary til-button-inactive font-weight-bold px-2 py-2" type="button">W</button></div>
                            <div class="mx-1"><button class="btn btn-primary til-button-active rounded font-weight-bold px-2 py-2" type="button">M</button></div>
                            <div class="ml-1"><button class="btn btn-primary til-button-inactive font-weight-bold px-2 py-2" type="button">Y</button></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-inline-block bg-white border rounded px-4 py-4">
                            <h3 class="se d-inline-block mygrey-text">Cats will rule the world</h3>
                            <p class="mb-0 mt-1 d-inline-block" style="font-family: Roboto, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae luctus justo, sit amet consequat tortor. Suspendisse potenti. Vivamus mauris velit, vestibulum vel lectus quis, iaculis ornare augue. Maecenas eleifend a orci maximus finibus. Mauris ultrices ligula a fringilla blandit. Maecenas consequat tortor ac quam consectetur, sit amet pellentesque justo sollicitudin. Phasellus a lacinia ante, eu dapibus velit. Aenean pretium, orci ut rutrum placerat, augue nulla bibendum arcu, ac tempor quam orci vel nulla. Duis congue auctor maximus. Vestibulum elementum nulla sed arcu volutpat vulputate. Fusce tellus sapien, lacinia sit amet metus in, mollis congue odio. Sed imperdiet sollicitudin purus efficitur mollis. Aenean quis ante quis orci fermentum bibendum. Nulla a risus sem. Aliquam consectetur, odio id sodales luctus, nisi odio blandit ex, vel malesuada velit justo sit amet mauris.<br></p>
                        </div>
                    </div>
                </div>
                <div class="row my-3 mx-2">
                    <div class="col-auto d-inline-block mx-0 px-0">
                        <div id="buttons-7" class="mx-0 px-0 w-100 d-flex my-2">
                            <div class="d-xl-flex flex-grow-1 align-items-center bg-white border rounded d-inline-block til-date mr-1 border-3 rounded-0">
                                <p class="mb-0 text-center d-inline-block mx-auto px-1">01.06.2020</p>
                            </div>
                            <div class="d-flex w-100">
                                <div class="mx-1 align-self-end"><button class="btn btn-primary myteal-text myteal-bor edit-btn rounded-0 bg-transparent border-3 d-inline-block align-self-center mx-0 px-2 py-2" type="button"><i class="fa fa-pencil"></i></button></div>
                                <div class="ml-auto ml-1 align-self-end"><button class="btn btn-primary myred-text myred-border font-weight-bold delete-btn rounded-0 bg-transparent border-3 d-inline-block align-self-center mx-0 px-2 py-2" type="button"><i class="fa fa-trash"></i></button></div>
                            </div>
                        </div>
                        <div id="buttons-8" class="d-flex my-2">
                            <div class="mx-1"><button class="btn btn-primary til-button-inactive rounded-0 font-weight-bold px-2 py-2" type="button">D</button></div>
                            <div class="mx-1"><button class="btn btn-primary til-button-inactive rounded-0 font-weight-bold px-2 py-2" type="button">W</button></div>
                            <div class="mx-1"><button class="btn btn-primary til-button-inactive rounded-0 font-weight-bold px-2 py-2" type="button">M</button></div>
                            <div class="ml-1"><button class="btn btn-primary til-button-inactive rounded-0 font-weight-bold px-2 py-2" type="button">Y</button></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-inline-block bg-white border rounded px-4 py-4">
                            <h3 class="se d-inline-block mygrey-text">Cooked potatoes are better than raw</h3>
                            <p class="mb-0 mt-1 d-inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae luctus justo, sit amet consequat tortor. Suspendisse potenti. Vivamus mauris velit, vestibulum vel lectus quis, iaculis ornare augue. Maecenas eleifend a orci maximus finibus. Mauris ultrices ligula a fringilla blandit. Maecenas consequat tortor ac quam consectetur, sit amet pellentesque justo sollicitudin. Phasellus a lacinia ante, eu dapibus velit. Aenean pretium, orci ut rutrum placerat, augue nulla bibendum arcu, ac tempor quam orci vel nulla. Duis congue auctor maximus. Vestibulum elementum nulla sed arcu volutpat vulputate. Fusce tellus sapien, lacinia sit amet metus in, mollis congue odio. Sed imperdiet sollicitudin purus efficitur mollis. Aenean quis ante quis orci fermentum bibendum. Nulla a risus sem. Aliquam consectetur, odio id sodales luctus, nisi odio blandit ex, vel malesuada velit justo sit amet mauris.<br></p>
                        </div>
                    </div>
                </div>
                <div class="row my-3 mx-2">
                    <div class="col-auto d-inline-block mx-0 px-0">
                        <div id="buttons-5" class="mx-0 px-0 w-100 d-flex my-2">
                            <div class="d-xl-flex flex-grow-1 align-items-center bg-white border rounded d-inline-block til-date mr-1 border-3 rounded-0">
                                <p class="mb-0 text-center d-inline-block mx-auto px-1">01.06.2020</p>
                            </div>
                            <div class="d-flex w-100">
                                <div class="mx-1 align-self-end"><button class="btn btn-primary myteal-text myteal-bor edit-btn rounded-0 bg-transparent border-3 d-inline-block align-self-center mx-0 px-2 py-2" type="button"><i class="fa fa-pencil"></i></button></div>
                                <div class="ml-auto ml-1 align-self-end"><button class="btn btn-primary myred-text myred-border font-weight-bold delete-btn rounded-0 bg-transparent border-3 d-inline-block align-self-center mx-0 px-2 py-2" type="button"><i class="fa fa-trash"></i></button></div>
                            </div>
                        </div>
                        <div id="buttons-6" class="d-flex my-2">
                            <div class="mx-1"><button class="btn btn-primary til-button-active rounded-0 font-weight-bold px-2 py-2" type="button">D</button></div>
                            <div class="mx-1"><button class="btn btn-primary til-button-active rounded-0 font-weight-bold px-2 py-2" type="button">W</button></div>
                            <div class="mx-1"><button class="btn btn-primary til-button-active rounded-0 font-weight-bold px-2 py-2" type="button">M</button></div>
                            <div class="ml-1"><button class="btn btn-primary til-button-active rounded-0 font-weight-bold px-2 py-2" type="button">Y</button></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-inline-block bg-white border rounded px-4 py-4">
                            <h3 class="se d-inline-block mygrey-text">Better an egg tomorrow than a punch yesterday</h3>
                            <p class="mb-0 mt-1 d-inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae luctus justo, sit amet consequat tortor. Suspendisse potenti. Vivamus mauris velit, vestibulum vel lectus quis, iaculis ornare augue. Maecenas eleifend a orci maximus finibus. Mauris ultrices ligula a fringilla blandit. Maecenas consequat tortor ac quam consectetur, sit amet pellentesque justo sollicitudin. Phasellus a lacinia ante, eu dapibus velit. Aenean pretium, orci ut rutrum placerat, augue nulla bibendum arcu, ac tempor quam orci vel nulla. Duis congue auctor maximus. Vestibulum elementum nulla sed arcu volutpat vulputate. Fusce tellus sapien, lacinia sit amet metus in, mollis congue odio. Sed imperdiet sollicitudin purus efficitur mollis. Aenean quis ante quis orci fermentum bibendum. Nulla a risus sem. Aliquam consectetur, odio id sodales luctus, nisi odio blandit ex, vel malesuada velit justo sit amet mauris.<br></p>
                        </div>
                    </div>
                </div>
                <div id="tape-section" class="tape-section"></div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <?php 
    if(isset($q)){
        include_once("components/new-til.php"); 
    
    }
    include_once("components/footer.php"); ?>