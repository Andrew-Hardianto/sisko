<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('admin/mapel_ubah'); ?>
            <div class="form-group">
                <label for="kode" class="font-weight-bold text-gray-900">Kode Mata Pelajaran</label>
                <input type="text" class="form-control" id="kode" name="kode" value="<?= $m['kode_mapel'] ?>" required="numeric">
            </div>
            <div class="form-group">
                <label for="nama" class="font-weight-bold text-gray-900">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $m['nama'] ?>">
            </div>
            <div class="form-group">
                <label for="" class="font-weight-bold text-gray-900">Nama Guru</label>
                <?= form_dropdown('guru', $guru, $selectedguru, ['class' => 'form-control', 'required' => 'required']) ?>
            </div>
            <div class="form-group">
                <div class="form-row justify-content-center">
                    <div class="col-md-5 mt-3">
                        <button type="submit" name="simpan" class="btn btn-success btn-block">Perbarui</button>
                    </div>
                    <div class="col-md-5 mt-3">
                        <a class="btn btn-success btn-block" href="<?= base_url('admin/mapel'); ?>">Batal</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>