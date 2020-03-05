<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('admin/kelas_ubah'); ?>
            <div class="form-group">
                <label for="kode" class="font-weight-bold text-gray-900">Kode Kelas</label>
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $kelas['kode_kelas']; ?>" required>
                <small class="form-text text-danger"><?= form_error('kode'); ?></small>
            </div>
            <div class="form-group">
                <label for="nama" class="font-weight-bold text-gray-900">Nama Kelas</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $kelas['nama']; ?>" required>
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
                <label for="ajaran" class="font-weight-bold text-gray-900">Tahun Ajaran</label>
                <input type="text" class="form-control" id="ajaran" name="ajaran" value="<?= $kelas['tahun_ajaran']; ?>" required>
                <small class="form-text text-danger"><?= form_error('ajaran'); ?></small>
            </div>
            <div class="form-group">
                <div class="form-row justify-content-center">
                    <div class="col-md-5 mt-3">
                        <button type="submit" name="simpan" class="btn btn-success btn-block">Perbarui</button>
                    </div>
                    <div class="col-md-5 mt-3">
                        <a class="btn btn-success btn-block" href="<?= base_url('admin/kelas'); ?>">Batal</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>