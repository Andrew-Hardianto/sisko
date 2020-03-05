<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $subtitle; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form>
                <div class="form-group row justify-content-center">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <img src="<?= base_url('assets/img/foto/') . $guru['foto']; ?>" class="img-thumbnail" width="150px">
                        </div>
                    </div>
                </div>
                <div class="ml-5">
                    <table class="h5 table table-borderless font-weight-bold text-gray-900">
                        <tr>
                            <td width="250">NIP</td>
                            <td>: <?= $guru['nip_guru']; ?></td>
                        </tr>
                        <tr>
                            <td width="250">NUPTK</td>
                            <td>: <?= $guru['nuptk']; ?></td>
                        </tr>
                        <tr>
                            <td width="250">Nama</td>
                            <td>: <?= $guru['nama']; ?></td>
                        </tr>
                        <tr>
                            <td width="250">Jenis Kelamin</td>
                            <td>: <?= $guru['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <td width="250">Tempat Lahir</td>
                            <td>: <?= $guru['tempat_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td width="250">Tanggal Lahir</td>
                            <td>: <?= $guru['tanggal_lahir']; ?></td>
                        </tr>
                        <tr>
                            <td width="250">Agama</td>
                            <td>: <?= $guru['agama']; ?></td>
                        </tr>
                        <tr>
                            <td width="250">Alamat</td>
                            <td>: <?= $guru['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td width="250">Pendidikan Terakhir</td>
                            <td>: <?= $guru['pendidikan']; ?></td>
                        </tr>
                    </table>
                </div>

                <div class="form-group">
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 mt-5">
                            <a class="btn btn-success btn-block" href="<?= base_url('guru'); ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>