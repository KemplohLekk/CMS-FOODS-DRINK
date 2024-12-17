<!doctype html>
<!--
	The7 by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?= base_url('assets/the7/'); ?>" rel="icon">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="<?= base_url('assets/the7/'); ?>css/reset.css" rel="stylesheet">
        <link href="<?= base_url('assets/the7/'); ?>css/simplegrid.css" rel="stylesheet">
        <link href="<?= base_url('assets/the7/'); ?>css/icomoon.css" rel="stylesheet">
        <link href="<?= base_url('assets/the7/'); ?>css/lightcase.css" rel="stylesheet">
        <link href="<?= base_url('assets/the7/'); ?>js/owl-carousel/owl.carousel.css" rel="stylesheet" />
        <link href="<?= base_url('assets/the7/'); ?>js/owl-carousel/owl.theme.css" rel="stylesheet"  />
        <link href="<?= base_url('assets/the7/'); ?>js/owl-carousel/owl.transitions.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?= base_url('assets/the7/'); ?>style.css">
    
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
           <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
           <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
           <![endif]-->
        </head>
        <body id="home">
            <!-- Header -->
            <header id="top-header" class="header-home">
                <div class="grid">
                    <div class="col-1-1">
                        <div class="content">
                            <div class="logo-wrap">
                                <span class="text-primary"><?= $konfig->judul_website;  ?></span>
                            </div>
                            <nav class="navigation">
                                <input type="checkbox" id="nav-button">
                                <label for="nav-button" onclick></label>
                                <ul class="nav-container">
                                    <li><a href="<?= base_url('home')?>" class="nav-item nav-link">Home</a></li>
                                    <?php foreach ($kategori as $kate) {?>
                                        <li><a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a></li>
                                        <?php } ?>
                                        <li><a href="<?= base_url('auth')?>" class="">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <!-- Parallax Section -->
            <div class="parallax-section parallax1">
                <div class="grid grid-pad">
                    <div class="col-1-1">
                         <div class="content content-header" >
                            <h2>WELCOME TO MY BLOG</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Parallax Section -->
            <!-- Blog Section -->
            <div class="wrap blog-grid grey" id="blog">
    <div class="grid grid-pad">
        <div class="content">
            <h2>Our Blog</h2>
            <div class="blog-container">
                <?php foreach ($konten as $uu) { ?>
                    <div class="col-1-2">
                    <article class="post-wrap">
                                <div class="post-img">
                                        <img class="post-img" src="<?= base_url('assets/upload/konten/'.$uu['foto'])?>">
                                        <div class="card-body bg-light text-center p-4">
                                            <h4 class=""><?= $uu['judul'] ?></h4>
                                            <div class="d-flex justify-content-center mb-3">
                                                <small class="mr-3"><i class="fa fa-user text-primary"></i> <?= $uu['nama'] ?></small>
                                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> <?= $uu['nama_kategori'] ?></small>
                                            </div>
                                            <a href="<?= base_url('home/artikel/'.$uu['slug'])?>" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                                        </div>
                                        </div>
                            </article>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


            <!-- End Blog Section -->
        

            
            
            <!-- End Blog Section -->

            <!-- CurveUp -->
                <!-- Footer -->
                <footer class="wrap">
                    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
                        <div class="row pt-5">
                            <div class="col-lg-4 col-md-6 mb-5">
                                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                                    <i class="flaticon-043-teddy-bear"></i>
                                    <span class="text-white"><?= $konfig->judul_website;  ?></span>
                                </a>
                                <p><?= $konfig->profil_website;  ?></p>
                                <div class="d-flex justify-content-start mt-4">
                                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                        style="width: 38px; height: 38px;" href="https://<?= $konfig->facebook;  ?>"><i class="icon-facebook"></i></a>
                                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                                        style="width: 38px; height: 38px;" href="https://<?= $konfig->instagram;  ?>"><i class="icon-instagram"></i></a>
                                </div>
                            </div>
                            <div>
                                        <div class="box-icon">
                                            <i class="icon-location"></i>
                                        </div>
                                        <span>Address:</span>
                                        <p><?= $konfig->alamat; ?></p>
                                    </div>
                                </div>
                                 <div class="box-icon">
                                            <i class="icon-clock"></i>
                                        </div>
                                        <span class="text-white">Email</span>
                                        <p><?= $konfig->email;  ?></p>
                                    </div>
                                </div>
                                <div>
                                        <div class="box-icon">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <span>Phone:</span>
                                        <p><?= $konfig->no_wa;  ?></p>
                                    </div>
                                </div>
                            </div>
                        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
                            <p class="m-0 text-center text-white">
                                &copy; <p class="source-org copyright"><?= $konfig->judul_website; ?></p>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

                <div class="loader-overlay">
                    <div class="loader">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"><></i></a>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>js/jquery.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>js/main.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>js/mixitup.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>js/smoothscroll.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>js/jquery.nav.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>js/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>https://maps.googleapis.com/maps/api/js"></script>
    <script src="<?= base_url('assets/the7/'); ?>http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('assets/the7/'); ?>js/lightcase.min.js"></script>

</body>

</html>