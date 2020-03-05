<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="form-group row justify-content-center">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <img src="<?= base_url('assets/img/foto/') . $psb['foto']; ?>" class="img-thumbnail" width="150px">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row justify-content-center">
                    <?= form_open_multipart('admin/unggah_berkas'); ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="kode">Kode Pendaftaran</label>
                            <input type="text" id="kode" name="kode" class="form-control" placeholder="kode pendaftaran" value="<?= $psb['kode_pendaftaran']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" id="nisn" name="nisn" class="form-control" value="<?= $psb['nisn']; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?= $psb['nama']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row justify-content-center">
                            <div class="custom-file col-md-6 mt-3 mr-1">
                                <input type="file" class="custom-file-input" name="ktp" id="ktp">
                                <label class="custom-file-label font-weight-bold text-gray-900" for="ktp">KTP</label>
                            </div>
                            <div class="custom-file col-md-5 mt-3">
                                <input type="file" class="custom-file-input" name="bukti" id="bukti">
                                <label class="custom-file-label font-weight-bold text-gray-900" for="ktp">BUKTI</label>
                            </div>
                            <div class="col-md-5 mt-3">
                                <button type="submit" name="unggah" class="btn btn-block btn-primary">Unggah</button>
                            </div>

                        </div>
                    </div>
                    <?= form_close() ?>
                    <div class="col-md-5 mt-3">
                        <a class="btn btn-success btn-block" href="<?= base_url('admin/psb'); ?>">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>