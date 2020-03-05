<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISKO - LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/my.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>img/garuda.ico" rel="shortcut icon">

</head>

<body class="bg-success">



    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">SISTEM INFORMASI SEKOLAH</h1>
                                        <h4 class="h4 text-gray-900 mb-4 font-weight-bold">LOGIN</h4>
                                    </div>
                                    <?= $this->session->flashdata('gagal'); ?>
                                    <form class="user" method="post" action="<?= base_url('auth/cekmasuk'); ?>">
                                        <div class="form-group">
                                            <input type="text" id="username" name="username" class="form-control form-control-user" placeholder="NIS/NIP" autofocus="autofocus" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="Password" name="password" class="form-control form-control-user" placeholder="Password" maxlength="10" required>
                                        </div>
                                        <hr>
                                        <div class="form-group ">
                                            <div class="col-md-12">
                                                <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Login</button>
                                                <a href="<?= base_url('home'); ?>" class="btn btn-success btn-user btn-block">Kembali</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>