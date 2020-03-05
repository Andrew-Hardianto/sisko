<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Berhasil</title>
    <link href="<?= base_url('assets/'); ?>css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-info">
<div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">
                <h4 align="center">SELAMAT ANDA BERHASIL MENDAFTAR</h4>
            </div>
            <div class="card-body" align="center">
                <div class="form-group mt-3 ">
                        <div class="col-md-6 mt-3 ">
                            <a  href="<?= base_url('pendaftaran/bukti'); ?>" target="_blank" class="btn btn-success btn-block" >Cetak Bukti Pendaftaran</a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a class="btn btn-success btn-block" href="<?= base_url('home'); ?>"> Kembali Ke Halaman Home</a>
                        </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>