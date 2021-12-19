<?php
    
    include_once("components/head.php");
    include_once("components/navbar.php");
?>

    <!-- Start: 1 Row 2 Columns -->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-xl-center">
                    <div class="whitish py-5 px-5 mycard rounded">
                        <h1 class="myred-text se mb-3">Error 404</h1>
                        <h5 class="mygrey-text se font-weight-bold">Page not found</h5>
                        <p>We looked everywere but we weren't able to find the page you are looking for. If you came here clicking a link it might be broken, if you manually typed the URL there might be a typo.&nbsp;<br></p>
                        <h5 class="mygrey-text se font-weight-bold">Report a bug</h5>
                        <p>If you see this page and you think you shouldn't please tell me more by filling the form at&nbsp;<a class="se myred-text" href="#">this link</a>.<br></p>
                        <h5 class="mygrey-text se font-weight-bold">Mistakes can happen</h5><p>
                            You may want to <a href="/"class="se myred-text" >go back to the homepage</a> or listen to a song about mistakes by an emergent Italian artist.
                        </p>
                        <div class="d-flex align-items-center justify-content-center">

                            <iframe src="https://open.spotify.com/embed/track/1tP7JG8iWuBWhO8hf3KPJU" width="100%" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </div>

                        <div id="tape-section" class="tape-section"></div>
                    </div>
                </div>
                <div class="col-md-6 d-md-flex align-items-center justify-content-center"><img src="/assets/img/404.not.found_paper.png?h=71200bf57746c425802e5fb2aaf4cae9" style="max-width: 100%;"></div>
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <?php include_once("components/footer.php"); ?>