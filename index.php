<?php
// https://steampixel.de/en/simple-and-elegant-url-routing-with-php/
session_start();

// Include router class
require __DIR__ . '/models/Route.php';


Route::add('/',function(){
    include __DIR__ . "/view/home.php";
});

// Add base route (startpage)
Route::add('/welcome',function(){
    include __DIR__ . "/view/confirm-email.php";
});


// // Simple test route that simulates static html file
// Route::add('/test.html',function(){
//     echo 'Hello from test.html';
// });

// // Post route example
// Route::add('/contact-form',function(){
//     echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
// },'get');

// // Post route example
// Route::add('/contact-form',function(){
//     echo 'Hey! The form has been sent:<br/>';
//     print_r($_POST);
// },'post');

// =============================================================================
// ==========================      LOGIN       =================================
// =============================================================================

Route::add('/login/([/-0-9a-zA-Z]*)',function($username){
  include_once __DIR__ . "/view/login.php";
});

Route::add('/login',function(){
  include_once __DIR__ . "/view/login.php";
});
Route::add('/post-login',function(){
  include_once __DIR__ . "/view/post-login.php";
  include_once __DIR__ . "/view/home.php";
}, "post");

// =============================================================================
// ==========================      LOGOUT       ================================
// =============================================================================

Route::add('/logout',function(){
  include_once __DIR__ . "/view/logout.php";
});


// =============================================================================
// ==========================      SIGNUP       =================================
// =============================================================================

Route::add('/signup',function(){
  include_once __DIR__ . "/view/signup.php";
});


// =============================================================================
// =====================      CONFIRM EMAIL       ==============================
// =============================================================================

Route::add('/confirm-email',function(){
  include_once __DIR__ . "/view/confirm-email.php";
});

Route::add('/settings',function(){
  include_once __DIR__ . "/view/settings.php";
});


// =============================================================================
// =====================      FORGOT PASSWORD       ============================
// =============================================================================

Route::add('/forgot-password',function(){
  include_once __DIR__ . "/view/forgot-password.php";
});
Route::add('/forgot-password/([/-0-9a-zA-Z]*)',function($username){
    include_once __DIR__ . "/view/forgot-password.php";
  });

// =============================================================================
// =====================      FORGOT PASSWORD       ============================
// =============================================================================

Route::add('/new',function(){
  include_once __DIR__ . "/view/go.php";
});



  // =============================================================================
  // ======================      PUBLIC TIL        ===============================
  // =============================================================================
  // =============================================================================
  
  Route::add('/til/public',function(){
    include_once __DIR__ . "/view/public-til.php";
  });


// =============================================================================
// ========================      USER ROUTE       ==============================
// =============================================================================

Route::add('/user/([/-0-9a-zA-Z]*)',function($q){
    // if($_SESSION['logged']){ 
      
      include_once __DIR__ . "/view/user.php";
    // } else {
    //   include_once __DIR__ . "/view/403.php";
    // }
});

Route::add('/til/([/-0-9a-zA-Z]*)',function($q){
  // if($_SESSION['logged']){
    include_once __DIR__ . "/view/personal-til.php";
    // } else {
      //   include_once __DIR__ . "/view/403.php";
      // }
});
Route::add('/til/([/-0-9a-zA-Z]*)/',function($q){
  // if($_SESSION['logged']){
    include_once __DIR__ . "/view/personal-til.php";
    // } else {
      //   include_once __DIR__ . "/view/403.php";
      // }
});

Route::add('/settings/([/-0-9a-zA-Z]*)/',function($q){
  // if($_SESSION['logged']){
    include_once __DIR__ . "/view/settings.php";
    // } else {
      //   include_once __DIR__ . "/view/403.php";
      // }
  });
Route::add('/settings/([/-0-9a-zA-Z]*)',function($q){
  // if($_SESSION['logged']){
    include_once __DIR__ . "/view/settings.php";
    // } else {
      //   include_once __DIR__ . "/view/403.php";
      // }
});
        
Route::add('/data-management',function(){
    include_once __DIR__ . "/view/data-management.php";
});

// ==========================      QUERY        ================================
// =============================================================================
Route::add('/q',function(){
    include_once __DIR__ . "/view/query.php";
});





Route::add('/vector',function(){
  include_once __DIR__ . "/view/vec.php";
});


// Accept only numbers as parameter. Other characters will result in a 404 error
Route::pathNotFound(function(){
  include __DIR__ . "/view/404.php";
});

Route::run('/');


