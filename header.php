<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>test</title>

    <?php wp_head(); ?>

</head>
<body <?php body_class()?> >


<!-- top nav -->
<div class="container-fluid top-nav ">
    <div class="container justify-content-between py-2">
        <div class="row">
            <div class="col">
                <strong><?php echo wp_date('l, j F G:i'); ?></strong>
            </div>
            <div class="col">
                <div class="float-end">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram mx-2"></i>
                    <i class="bi bi-twitter"></i>
                </div>
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
        </div>
    </div>
</div>
<!-- end top nav -->

<div class="container">
    
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div>            
            <a class="navbar-brand" href="/">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png'?>" class="img-fluid" alt="">               
            </a>
        </div>
        
        <div class="w-50">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn border rounded-circle" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>

    </div>
        
    <nav class="nav navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav">

                <li class="nav-item dropdown pe-3">
                    <i class="bi bi-list nav-link dropdown-toggle" 
                    role="button" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false">
                </i>
                <li class="nav-item fw-bold text-uppercase">
                    <a class="nav-link pe-5 ps-2 active border-end" aria-current="page" href="#">News</a>
                </li>
                <li class="nav-item border-end fw-bold text-uppercase">
                    <a class="nav-link pe-5 ps-2" href="#">Dove bere e mangiare</a>
                </li>
                <li class="nav-item border-end fw-bold text-uppercase">
                    <a class="nav-link pe-5 ps-2 fw-bold" href="#">Food & Drink</a>
                </li>
                <li class="nav-item border-end fw-bold text-uppercase">
                    <a class="nav-link pe-5 ps-2" href="#">Cosa fare in citt&agrave;</a>
                </li>
            </ul>
        </div>

    </nav>
    
    <div class="container d-flex justify-content-around mt-5" data-bs-toggle="dropdown" aria-expanded="false">
        <div>
            <h5>News</h5>
            <ul>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
            </ul>
        </div>

        <div>
            <h5>Dove bere e mangiare</h5>
            <ul>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
            </ul>
        </div>

        <div>
            <h5>Food & Drink</h5>
            <ul>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
            </ul>
        </div>

        <div>
            <h5>cosa fare in citta</h5>
            <ul>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
                <li>test</li>
            </ul>
        </div>
    </div>
</div>
