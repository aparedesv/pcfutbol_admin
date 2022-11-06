<div class="m-0 p-2 row d-flex justify-content-between sticky-top bg-light">

    <div class="col-2">
        <img class="img-fluid" src="<?php echo API_URL; ?>/assets/img/pilota.png">
    </div>

    <div class="col col-md-auto text-center">
        <h1><?php echo env('APP_NAME'); ?></h1>
    </div>
        
    <div class="col-2">

        <div class="btn-group">

            <button type="button" class="btn btn-sm text-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>
            
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/login">Log in</a></li>
                <li><a class="dropdown-item" href="#">Sign in</a></li>
            </ul>
        </div>

    </div>

</div>