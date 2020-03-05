<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISKO | PSB</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel=" stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/my.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>img/garuda.ico" rel="shortcut icon">

</head>

<body class="bg-success">

    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">
                <h4>FORM PENDAFTARAN SISWA BARU</h4>
            </div>
            <div class="card-body">
                <?= form_open_multipart('pendaftaran/daftar'); ?>
                <div class="form-row">
                    <div class="col-md-12">
                        <!-- <div class="form-group">
                            <label for="kode">Kode Pendaftaran</label>
                            <input type="text" id="kode" name="kode" class="form-control" placeholder="kode pendaftaran" value="<?= set_value('kode'); ?>" readonly>
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" id="nisn" name="nisn" class="form-control" autofocus="autofocus">
                            <small class="form-text text-danger"><?= form_error('nisn'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?= set_value('nama'); ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="<?= set_value('jenis_kelamin'); ?>">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="agama">Agama</label>
                        <select type="text" id="agama" name="agama" class="form-control" value="<?= set_value('agama'); ?>">
                            <option value="">Pilih Agama</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="PROTESTAN">PROTESTAN</option>
                            <option value="KATOLIK">KATOLIK</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="HINDU">HINDU</option>
                            <option value="KONGHUCU">KONGHUCU</option>
                        </select>
                        <small class="form-text text-danger"><?= form_error('agama'); ?></small>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tempat">Tempat Lahir</label>
                            <input type="text" id="tempat" name="tempat" class="form-control" value="<?= set_value('tempat'); ?>">
                            <small class="form-text text-danger"><?= form_error('tempat'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Lahir</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= set_value('tanggal'); ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="<?= set_value('alamat'); ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_ayah">Nama Ayah</label>
                            <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" value="<?= set_value('nama_ayah'); ?>">
                            <small class="form-text text-danger"><?= form_error('nama_ayah'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" value="<?= set_value('nama_ibu'); ?>">
                            <small class="form-text text-danger"><?= form_error('nama_ibu'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" id="asal_sekolah" name="asal_sekolah" class="form-control" value="<?= set_value('asal_sekolah'); ?>">
                            <small class="form-text text-danger"><?= form_error('asal_sekolah'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="no_telp">No Telepon / No Handphone</label>
                            <input type="text" id="no_telp" name="no_telp" class="form-control" value="<?= set_value('no_telp'); ?>">
                            <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select type="text" id="jurusan" name="jurusan" class="form-control" value="<?= set_value('jurursan'); ?>">
                                <option value="">Pilih Jurusan</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" id="foto" name="foto" class="form-control-file">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tgl_daftar">Tanggal Daftar</label>
                            <input type="text" id="tgl_daftar" name="tgl_daftar" class="form-control" value="<?= date('Y-m-d') ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="form-row justify-content-center">
                        <div class="col-md-3 mb-3">
                            <button type="submit" name="daftar" class="btn btn-success btn-block">Kirim</button>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-success btn-block" href="<?= base_url('home'); ?>">Batal</a>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
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