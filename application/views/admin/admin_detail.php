<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <?= form_open_multipart('admin/user_detail'); ?>
            <div class="form-group row justify-content-center">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <img src="<?= base_url('assets/img/foto/') . $admin['foto']; ?>" class="img-thumbnail" width="150px">
                    </div>
                </div>
            </div>
            <div class="ml-5">
                <table class="h5 table table-borderless font-weight-bold text-gray-900">
                    <tr>
                        <td>NIP</td>
                        <td>: <?= $admin['nip']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= $admin['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: <?= $admin['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>: <?= $admin['tempat_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>: <?= $admin['tanggal_lahir']; ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>: <?= $admin['agama']; ?></td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>: <?= $admin['no_telepon']; ?></td>
                    </tr>
                </table>
            </div>

            <div class="form-group">
                <div class="form-row justify-content-center">
                    <div class="col-md-5 mt-3">
                        <a class="btn btn-success btn-block" href="<?= base_url('admin/admin'); ?>">Kembali</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>