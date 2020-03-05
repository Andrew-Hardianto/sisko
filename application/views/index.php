<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMA TAMANSISWA</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url('assets/'); ?>css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?= base_url('assets/'); ?>css/style.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/'); ?>img/garuda.ico" rel="shortcut icon">

    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #929FBA !important;
            }
        }
    </style>

</head>

<body>

    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background-color: #00e600">
            <div class=" container-fluid">

                <!-- Brand -->
                <a class="navbar-brand">
                    <img src="<?= base_url('assets/'); ?>img/sma.png" alt="" width="40px">
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">BERANDA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#visi&misi">VISI & MISI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">KONTAK</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="<?= base_url('pendaftaran'); ?>" class="nav-link">PSB</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('auth'); ?>" class="nav-link">LOGIN</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <!-- <li data-target="#carousel-example-1z" data-slide-to="2"></li> -->
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">
                    <div class="view" style="background-image: url('<?= base_url('assets/'); ?>img/p.jpg'); background-repeat: no-repeat; background-size: cover;">

                        <!-- Mask & flexbox options-->
                        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <!-- <h1 class="mb-4">
                                    <strong>SMA TAMANSISWA BEKASI</strong>
                                </h1>

                                <p>
                                    <strong>BELAJAR DALAM PONDOK BUDI PEKERTI</strong>
                                </p> -->


                            </div>
                            <!-- Content -->

                        </div>
                        <!-- Mask & flexbox options-->

                    </div>
                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class="carousel-item">
                    <div class="view" style="background-image: url('<?= base_url('assets/'); ?>img/5.jpg'); background-repeat: no-repeat; background-size: cover;">

                        <!-- Mask & flexbox options-->
                        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                            <!-- Content -->
                            <div class="text-center white-text mx-5 wow fadeIn">
                                <h1 class="mb-4">
                                    <strong>SMA TAMANSISWA BEKASI</strong>
                                </h1>

                                <p>
                                    <strong>BELAJAR DALAM PONDOK BUDI PEKERTI</strong>
                                </p>
                            </div>
                            <!-- Content -->

                        </div>
                        <!-- Mask & flexbox options-->

                    </div>
                </div>
                <!--/Second slide-->

                <!--Third slide-->
                <!--/Third slide-->

            </div>
            <!--/.Slides-->

            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->

        </div>
        <!--/.Carousel Wrapper-->

    </header>

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Main features & Quick Start-->
            <section>
                <h3 class="h3 text-center mb-5 mt-5" id="visi&misi">VISI & MISI</h3>

                <!--Grid row-->
                <div class="row wow fadeIn justify-content-center">
                    <div class="col-5 mb-2 ">
                        <h4 class="feature-title font-weight-bold mb-1 black-text text-center">VISI</h4>
                        <p class="mt-2 black-text">Membangun manusia yang beriman dan bertqwa, Merdeka lahir batin, Berpengetahuan, Berketerampilan agar menjadi masyarakat yang berguna bagi nusa dan bangsa
                        </p>
                    </div>
                </div>
                <div class="row wow fadeIn justify-content-center text-center">
                    <div class="col-5 mb-2">
                        <h4 class="feature-title font-weight-bold mb-1 black-text">MISI</h4>
                        <p class="mt-2 black-text">Perilaku Iman dan Taqwa (IMTAQ)</p>
                        <p class="mt-2 black-text">Ilmu Pengetahuan dan Teknologi (IPTEK)</p>
                        <p class="mt-2 black-text">Penerapan Budi Pekerti (Akhlak)</p>
                    </div>
                </div>
                <!--/Grid row-->

            </section>
            <!--Section: Main features & Quick Start-->
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4" id="kontak" style="background-color: #00e600">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h4>KONTAK KAMI</h4>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-6">
                    <h6>JL. Selecta Raya No.2 Perum Bumi Bekasi Baru Rawalumbu kota Bekasi, Jawa Barat 17115</h6>
                    <h6>Telp. (021) 8205858, Fax : (021) 8205858</h6>
                    <h6>E-Mail : smatamansiswa@gmail.com</h6>
                </div>
            </div>
        </div>
        <!--/.Call to action-->


        <!--Copyright-->
        <div class="footer-copyright py-3 black text-white">
            © 2019 Copyright:
            <a href=""> ANDREW HARDIANTO </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>