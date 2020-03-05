<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form>
                <div class="form-group row justify-content-center">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <img src="<?= base_url('assets/img/foto/') . $psb['foto']; ?>" class="img-thumbnail" width="150px">
                        </div>
                    </div>
                </div>
                <div class="ml-3">
                    <table class="h5 table table-borderless font-weight-bold text-gray-900">
                        <tr>
                            <td width="100px">Kode Pendaftaran</td>
                            <td>: <?= $psb['kode_pendaftaran']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">NISN</td>
                            <td>: <?= $psb['nisn']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Nama</td>
                            <td>: <?= $psb['nama']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Jenis Kelamin</td>
                            <td>: <?= $psb['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Tempat Lahir</td>
                            <td>: <?= $psb['tempat_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Tanggal Lahir</td>
                            <td>: <?= $psb['tanggal_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Agama</td>
                            <td width="100px">: <?= $psb['agama']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Alamat</td>
                            <td>: <?= $psb['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">No Telepon</td>
                            <td>: <?= $psb['no_telepon']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Nama Ayah</td>
                            <td>: <?= $psb['nama_ayah']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Nama Ibu</td>
                            <td>: <?= $psb['nama_ibu']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Jurusan</td>
                            <td>: <?= $psb['jurusan']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Asal Sekolah</td>
                            <td>: <?= $psb['asal_sekolah']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Tanggal Daftar</td>
                            <td>: <?= $psb['tgl_daftar']; ?></td>
                        </tr>
                    </table>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 mt-3">
                            <a class="btn btn-success btn-block" href="<?= base_url('admin/psb'); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>