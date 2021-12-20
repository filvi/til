<?php
$username = "banana-cambiami";
if(!$_SESSION['logged']){
$navbar = <<<HTML
<!-- Start: Navigation with Button -->
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button myblack-text">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="logo" src="/assets/img/til_rect.png?h=c9f2fb6f4f31416c7f7314d7d8e0236d">
            </a>
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon">
        </span>
    </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold letter-spacing-1 se redonhover" href="/til/til/public" >Public Tilmeline</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link font-weight-bold letter-spacing-1 se redonhover" href="/the-project" >The Project</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link font-weight-bold letter-spacing-1 se redonhover" href="/about-me" >About Me</a>
                     </li>
                    <li class="nav-item" >
                        <a class="nav-link font-weight-bold letter-spacing-1 se redonhover" href="/data-management" >Data Management</a>
                    </li>
                </ul>
                <span class="navbar-text actions"> <a class="login py-2 px-3 border outline-red-btn se pt-3 font-weight-bold letter-spacing-1" href="/login">Log In</a>
                <a class="login py-2 px-3 border filled-red-btn border se pt-3 font-weight-bold letter-spacing-1" href="/signup">Sign Up</a>
            </span>
            </div>
        </div>
    </nav>
    <!-- End: Navigation with Button -->
HTML;
} else {
    $navbar = <<<HTML
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button myblack-text">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="logo" src="/assets/img/til_rect.png?h=c9f2fb6f4f31416c7f7314d7d8e0236d">
                </a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold letter-spacing-1 se redonhover" href="/new">New TIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold letter-spacing-1 se redonhover" href="/til/$username">My stuff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold letter-spacing-1 se redonhover" href="/til/public"">Public tilmeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold letter-spacing-1 se redonhover" href="/settings">Settings</a>
                </li>
                </ul>
                <span class="navbar-text actions"> <a class="login py-2 px-3 border myred-border myred-text se pt-3 rounded border-2 font-weight-bold letter-spacing-1" href="/logout">Logout</a>
            </span>
            </div>
        </div>
    </nav>
    <!-- End: Navigation with Button -->
HTML;
}
echo $navbar;