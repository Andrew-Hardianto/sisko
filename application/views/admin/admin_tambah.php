<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('admin/admin_tambah'); ?>
            <div class="form-group">
                <label for="nip" class="font-weight-bold text-gray-900">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" value="<?= set_value('nip'); ?>">
                <small class="form-text text-danger"><?= form_error('nip'); ?></small>
            </div>
            <div class="form-group">
                <label for="nama" class="font-weight-bold text-gray-900">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
                <label for="kelamin" class="font-weight-bold text-gray-900">Jenis Kelamin</label>
                <select class="form-control" id="kelamin" name="kelamin" value="<?= set_value('kelamin'); ?>">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <small class="form-text text-danger"><?= form_error('kelamin'); ?></small>
            </div>
            <div class="form-group">
                <div class="form-row justify-content-center">
                    <div class="col-md-6 mt-3">
                        <label for="tempat" class="font-weight-bold text-gray-900">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" value="<?= set_value('tempat'); ?>">
                        <small class="form-text text-danger"><?= form_error('tempat'); ?></small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="tanggal" class="font-weight-bold text-gray-900">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal'); ?>">
                        <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="agama" class="font-weight-bold text-gray-900">Agama</label>
                <select class="form-control" id="agama" name="agama" value="<?= set_value('agama'); ?>">
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
            <div class="form-group">
                <label for="no_telp" class="font-weight-bold text-gray-900">No Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= set_value('no_telp'); ?>">
                <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
            </div>
            <div class="form-group">
                <label for="password" class="font-weight-bold text-gray-900">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password'); ?>">
                <small class="form-text text-danger"><?= form_error('password'); ?></small>
            </div>
            <div class="form-group">
                <label for="foto" class="font-weight-bold text-gray-900">Foto</label>
                <input type="file" id="foto" name="foto" class="form-control-file" placeholder="foto">
            </div>
            <div class="form-group">
                <div class="form-row justify-content-center">
                    <div class="col-md-5 mt-3">
                        <button type="submit" name="simpan" class="btn btn-success btn-block">Simpan</button>
                    </div>
                    <div class="col-md-5 mt-3">
                        <a class="btn btn-success btn-block" href="<?= base_url('admin/admin'); ?>">Batal</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>