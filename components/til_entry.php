<?php
$user = "asdasd";
$id = "12355";
$date = "12/12/2021";
$title = "Cats will rule the world";
$text =<<<TEXT
    Lorem ipsum dolor sit amet,
    consectetur adipiscing elit. Quisque vitae luctus justo, sit amet consequat tortor. Suspendisse potenti.
    Vivamus mauris velit, vestibulum vel lectus quis, iaculis ornare augue. Maecenas eleifend a orci maximus
    finibus. Mauris ultrices ligula a fringilla blandit. Maecenas consequat tortor ac quam consectetur, sit
    amet pellentesque justo sollicitudin. Phasellus a lacinia ante, eu dapibus velit. Aenean pretium, orci
    ut rutrum placerat, augue nulla bibendum arcu, ac tempor quam orci vel nulla. Duis congue auctor
    maximus. Vestibulum elementum nulla sed arcu volutpat vulputate. Fusce tellus sapien, lacinia sit amet
    metus in, mollis congue odio. Sed imperdiet sollicitudin purus efficitur mollis. Aenean quis ante quis
    orci fermentum bibendum. Nulla a risus sem. Aliquam consectetur, odio id sodales luctus, nisi odio
    blandit ex, vel malesuada velit justo sit amet mauris
TEXT;

if($type === "private"){
$html =<<<HTML
<div class="row my-3 mx-2">
    <div class="col-auto d-inline-block mx-0 px-0">
        <div id="buttons-3" class="mx-0 px-0 w-100 d-flex my-2">
            <div
                class="d-xl-flex flex-grow-1 align-items-center bg-white border rounded d-inline-block til-date mr-1 border-3 rounded shadow">
                <p class="mb-0 text-center d-inline-block mx-auto px-1">{{date}}</p>
            </div>
            <div class="d-flex w-100">
                <div class="mx-1 align-self-end">
                    <button
                        class="btn edit-btn rounded d-inline-block align-self-center border-3  mx-0 px-2 py-2 btn-outline-teal"
                        type="button">
                        <i class="fa fa-pencil"></i>
                    </button>
                </div>
                <div class="ml-1 align-self-end">
                    <button
                        class="btn font-weight-bold delete-btn rounded bg-transparent border-3 d-inline-block align-self-center px-2 py-2 btn-outline-red" 
                        type="button">
                        <i class="fa fa-trash">

                        </i>
                    </button>
                </div>
            </div>
        </div>
        <div class="justify-content-between d-flex my-2" id="buttons-2">
            <div class="mr-1">
                <div class="btn til-button-active font-weight-bold px-2 py-2" type="button">D</div>
            </div>
            <div class="mx-1">
                <div class="btn til-button-inactive font-weight-bold px-2 py-2" type="button">W</div>
            </div>
            <div class="mx-1">
                <div class="btn til-button-active rounded font-weight-bold px-2 py-2" type="button">M</div>
            </div>
            <div class="ml-1">
                <div class="btn til-button-inactive font-weight-bold px-2 py-2" type="button">Y</div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="d-inline-block bg-white border rounded px-4 py-4">
            <h3 class="se d-inline-block mygrey-text">{{title}} id:{{id}}</h3>
            <p class="mb-0 mt-1 d-inline-block" style="font-family: Roboto, sans-serif;">{{text}}<br>
            </p>
        </div>
    </div>
</div>
HTML;
} elseif($type === "public"){
$html =<<<HTML
<div class="row my-3 mx-2 ">
    <div class="col ">
        <div class="d-inline-block bg-white border rounded px-4 py-4 shadow">
         <div class="d-flex flex-grow">
        <h3 class="se d-inline-block mygrey-text flex-grow-1">{{title}} id:{{id}}</h3>
        
            
                <p class="mb-0 text-center d-inline-block mx-auto px-1">{{date}}</p>
            
            
                <p class="mb-0 text-center d-inline-block mx-auto px-1">{{author}}</p>
            
        </div>
            <p class="mb-0 mt-1 d-inline-block" style="font-family: Roboto, sans-serif;">{{text}}<br>
            </p>
        </div>
    </div>
</div>
HTML;
}else{
    echo "There was an error, $type";
}
$html = str_replace("{{user}}", $user, $html);
$html = str_replace("{{id}}", $id, $html);
$html = str_replace("{{date}}", $date, $html);
$html = str_replace("{{title}}", $title, $html);
$html = str_replace("{{text}}", $text, $html);

echo $html;


?>