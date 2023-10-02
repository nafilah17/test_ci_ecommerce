<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.ico')?>" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet" />
      
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <!-- <a class="navbar-brand" href="#!">Start Bootstrap</a> -->
                <div class="input-group" style="width:350px;">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" >
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="bi-search"></i>
                    </button>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link"  href="#!">
                        <i class="bi-house-fill me-1" style="font-size: 30px;"></i>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">
                        <i class="bi-award-fill me-1" style="font-size: 30px;"></i>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">
                        <i class="bi-display-fill me-1" style="font-size: 30px;"></i>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">
                        <i class="bi-controller me-1" style="font-size: 30px;"></i>
                        </a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">
                        <i class="bi-globe2 me-1" style="font-size: 30px;"></i>
                        </a></li>
                        
                    </ul>
                    <form class="d-flex">
                        <div class="d-flex">
                            <div class="px-4">
                                <i class="bi-bell-fill me-0" style="font-size: 30px;"></i>
                                <span class="position-absolute translate-middle p-1 bg-danger border rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </div>  
                        <div>
                            <img src="<?php echo base_url('assets/images/ava.webp')?>" class="rounded-circle" style="width: 40px;" alt="Avatar" />
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container d-flex">
            <!-- Sidebar -->
            <div class="row"> 
            <div class="col-sm-3 position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                aria-current="true"
                >
                    <div class="d-flex ">
                        <div class="px-1">
                            <img src="<?php echo base_url('assets/images/ava.webp')?>" class="rounded-circle" style="width: 40px;" alt="Avatar" />
                        </div>
                        <div>
                            <h6 class="mb-1">Monkey D Luff</h6>
                            <p class="mb-2 pb-1" style="color: #2b2a2a;">
                            @mugiwara
                            </p>
                        </div>
                    </div>
                </a>
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple "
                >
                <i class="bi-person-check-fill me-1"></i>
                <span>Followers</span>
                </a>
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="bi-person-check me-1"></i><span>Following</span></a
                >
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="bi-globe me-1"></i>
                <span>Community</span></a
                >
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="bi-graph-up me-1"></i>
                <span>Crowfunding</span>
                </a>
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="bi-bag-dash-fill me-1"></i>
                <span>Market</span>
                </a>
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="bi-newspaper me-1"></i>
                <span>News</span>
                </a>
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="bi-people-fill me-1"></i>
                <span>Groups</span>
                </a>
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="bi-chat-dots-fill me-1"></i>
                <span>Message</span>
                </a>
                <a
                href="#"
                class="list-group-item list-group-item-action py-2 ripple"
                >
                <i class="bi-bookmark-fill me-1"></i>
                <span>Saved</span>
                </a>
            
            </div>
        </div>
    <!-- Header-->
    <div class="col-sm-9">
        <header class="bg-dark">
            <div class="container px-4 px-lg-5 my-5">
                <!-- change image -->
                <img src="<?php echo base_url('assets/images/background-2.jpg')?>" class="img-fluid" style="width: 100%; height:auto;" alt="image-header">
                <!-- <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div> -->
            </div>
        </header>
    </div>

    </div> 
</div>

<div class="container px-4 px-lg-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-2 px-1">
            <img src="<?php echo base_url('assets/images/catalog-product.jpg')?>" class="rounded-circle" style="width: 150px;" alt="Avatar" />
        </div>
        <div class="col-12 col-md-6 col-lg-2 px-1">
            <img src="<?php echo base_url('assets/images/catalog-product.jpg')?>" class="rounded-circle" style="width: 150px;" alt="Avatar" />
        </div>
        <div class="col-12 col-md-6 col-lg-2 px-1">
            <img src="<?php echo base_url('assets/images/catalog-product.jpg')?>" class="rounded-circle" style="width: 150px;" alt="Avatar" />
        </div>
        <div class="col-12 col-md-6 col-lg-2 px-1">
            <img src="<?php echo base_url('assets/images/catalog-product.jpg')?>" class="rounded-circle" style="width: 150px;" alt="Avatar" />
        </div>
        <div class="col-12 col-md-6 col-lg-2 px-1">
            <img src="<?php echo base_url('assets/images/catalog-product.jpg')?>" class="rounded-circle" style="width: 150px;" alt="Avatar" />
        </div>
        <div class="col-12 col-md-6 col-lg-2 px-1">
            <img src="<?php echo base_url('assets/images/catalog-product.jpg')?>" class="rounded-circle" style="width: 150px;" alt="Avatar" />
        </div>
    </div>  
</div>


        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 col-12 col-md-8 col-lg-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/images/product-image.jpg')?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div >
                                    <!-- Product name-->
                                    <p>  Mobile Legend </p>
                                    <h6 class="fw-bolder me-1">MPL Indonesia Season 11</h6>
                                    <!-- Desc -->
                                    <div>
                                    <i class="bi-calendar3 me-1"></i>
                                        <span>20 Februari 2023 - 29 Februari 2023</span>
                                    </div>
                                    <div>
                                    <i class="bi-people me-1" ></i>
                                        <span>5/6 Tim</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="text-center">
                                    <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                    <div>
                                        <i class="bi-share me-1" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 col-12 col-md-8 col-lg-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/images/product-image.jpg')?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div >
                                    <!-- Product name-->
                                    <p>  Mobile Legend </p>
                                    <h6 class="fw-bolder me-1">MPL Indonesia Season 11</h6>
                                    <!-- Desc -->
                                    <div>
                                    <i class="bi-calendar3 me-1"></i>
                                        <span>20 Februari 2023 - 29 Februari 2023</span>
                                    </div>
                                    <div>
                                    <i class="bi-people me-1" ></i>
                                        <span>5/6 Tim</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="text-center">
                                    <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                    <div>
                                        <i class="bi-share me-1" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 col-12 col-md-8 col-lg-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/images/product-image.jpg')?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div >
                                    <!-- Product name-->
                                    <p>  Mobile Legend </p>
                                    <h6 class="fw-bolder me-1">MPL Indonesia Season 11</h6>
                                    <!-- Desc -->
                                    <div>
                                    <i class="bi-calendar3 me-1"></i>
                                        <span>20 Februari 2023 - 29 Februari 2023</span>
                                    </div>
                                    <div>
                                    <i class="bi-people me-1" ></i>
                                        <span>5/6 Tim</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="text-center">
                                    <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                    <div>
                                        <i class="bi-share me-1" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 col-12 col-md-8 col-lg-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/images/product-image.jpg')?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div >
                                    <!-- Product name-->
                                    <p>  Mobile Legend </p>
                                    <h6 class="fw-bolder me-1">MPL Indonesia Season 11</h6>
                                    <!-- Desc -->
                                    <div>
                                    <i class="bi-calendar3 me-1"></i>
                                        <span>20 Februari 2023 - 29 Februari 2023</span>
                                    </div>
                                    <div>
                                    <i class="bi-people me-1" ></i>
                                        <span>5/6 Tim</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="text-center">
                                    <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                    <div>
                                        <i class="bi-share me-1" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 col-12 col-md-8 col-lg-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/images/product-image.jpg')?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div >
                                    <!-- Product name-->
                                    <p>  Mobile Legend </p>
                                    <h6 class="fw-bolder me-1">MPL Indonesia Season 11</h6>
                                    <!-- Desc -->
                                    <div>
                                    <i class="bi-calendar3 me-1"></i>
                                        <span>20 Februari 2023 - 29 Februari 2023</span>
                                    </div>
                                    <div>
                                    <i class="bi-people me-1" ></i>
                                        <span>5/6 Tim</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="text-center">
                                    <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                    <div>
                                        <i class="bi-share me-1" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 col-12 col-md-8 col-lg-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/images/product-image.jpg')?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div >
                                    <!-- Product name-->
                                    <p>  Mobile Legend </p>
                                    <h6 class="fw-bolder me-1">MPL Indonesia Season 11</h6>
                                    <!-- Desc -->
                                    <div>
                                    <i class="bi-calendar3 me-1"></i>
                                        <span>20 Februari 2023 - 29 Februari 2023</span>
                                    </div>
                                    <div>
                                    <i class="bi-people me-1" ></i>
                                        <span>5/6 Tim</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="text-center">
                                    <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                    <div>
                                        <i class="bi-share me-1" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 col-12 col-md-8 col-lg-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/images/product-image.jpg')?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div >
                                    <!-- Product name-->
                                    <p>  Mobile Legend </p>
                                    <h6 class="fw-bolder me-1">MPL Indonesia Season 11</h6>
                                    <!-- Desc -->
                                    <div>
                                    <i class="bi-calendar3 me-1"></i>
                                        <span>20 Februari 2023 - 29 Februari 2023</span>
                                    </div>
                                    <div>
                                    <i class="bi-people me-1" ></i>
                                        <span>5/6 Tim</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="text-center">
                                    <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                    <div>
                                        <i class="bi-share me-1" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 col-12 col-md-8 col-lg-4">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo base_url('assets/images/product-image.jpg')?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div >
                                    <!-- Product name-->
                                    <p>  Mobile Legend </p>
                                    <h6 class="fw-bolder me-1">MPL Indonesia Season 11</h6>
                                    <!-- Desc -->
                                    <div>
                                    <i class="bi-calendar3 me-1"></i>
                                        <span>20 Februari 2023 - 29 Februari 2023</span>
                                    </div>
                                    <div>
                                    <i class="bi-people me-1" ></i>
                                        <span>5/6 Tim</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="d-flex" style="justify-content: space-between;">
                                    <div class="text-center">
                                    <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                    <div>
                                        <i class="bi-share me-1" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Test FE Rissa Nafilah 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
    </body>
</html>
