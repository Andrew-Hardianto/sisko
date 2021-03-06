<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form>
                <div class="form-group row justify-content-center">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <img src="<?= base_url('assets/img/foto/') . $siswa['foto']; ?>" class="img-thumbnail" width="150px">
                        </div>
                    </div>
                </div>
                <div class="ml-5">
                    <table class="h5 table table-borderless font-weight-bold text-gray-900">
                        <tr>
                            <td>NIS</td>
                            <td>: <?= $siswa['nis']; ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>: <?= $siswa['nisn']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: <?= $siswa['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <?= $siswa['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>: <?= $siswa['tempat_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: <?= $siswa['tanggal_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: <?= $siswa['agama']; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?= $siswa['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>: <?= $siswa['no_telepon']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td>: <?= $siswa['nama_ayah']; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>: <?= $siswa['nama_ibu']; ?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>: <?= $siswa['jurusan']; ?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>: <?= $siswa['asal_sekolah']; ?></td>
                        </tr>
                    </table>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 mt-3">
                            <a class="btn btn-success btn-block" href="<?= base_url('admin/siswa'); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>