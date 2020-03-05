<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('admin/admin_ubah'); ?>
            <div class="form-group">
                <label for="nip" class="font-weight-bold text-gray-900">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" value="<?= $admin['nip']; ?>" required="numeric">
                <small class="form-text text-danger"><?= form_error('nip'); ?></small>
            </div>
            <div class="form-group">
                <label for="nama" class="font-weight-bold text-gray-900">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $admin['nama']; ?>">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
                <label for="kelamin" class="font-weight-bold text-gray-900">Jenis Kelamin</label>
                <select class="form-control" id="kelamin" name="kelamin" value="<?= $admin['jenis_kelamin']; ?>">
                    <?php foreach ($jenis_kelamin as $jk) : ?>
                        <?php if ($jk == $admin['jenis_kelamin']) : ?>
                            <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                        <?php else : ?>
                            <option value="<?= $jk; ?>"><?= $jk; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <small class="form-text text-danger"><?= form_error('kelamin'); ?></small>
            </div>
            <div class="form-group">
                <div class="form-row justify-content-center">
                    <div class="col-md-6 mt-3">
                        <label for="tempat" class="font-weight-bold text-gray-900">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" value="<?= $admin['tempat_lahir']; ?>">
                        <small class="form-text text-danger"><?= form_error('tempat'); ?></small>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="tanggal" class="font-weight-bold text-gray-900">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $admin['tanggal_lahir']; ?>">
                        <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="agama" class="font-weight-bold text-gray-900">Agama</label>
                <select class="form-control" id="agama" name="agama" value="<?= $admin['agama']; ?>">
                    <?php foreach ($agama as $agm) : ?>
                        <?php if ($agm == $admin['agama']) : ?>
                            <option value="<?= $agm; ?>" selected><?= $agm; ?></option>
                        <?php else : ?>
                            <option value="<?= $agm; ?>"><?= $agm; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
                <small class="form-text text-danger"><?= form_error('agama'); ?></small>
            </div>
            <div class="form-group">
                <label for="no_telp" class="font-weight-bold text-gray-900">No Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $admin['no_telepon']; ?>">
                <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
            </div>
            <div class="form-group">
                <label for="password" class="font-weight-bold text-gray-900">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="">
                <small class="form-text text-danger"><?= form_error('password'); ?></small>
            </div>
            <div class="form-group row">
                <div class="col-sm-2 font-weight-bold text-gray-900">Foto</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/foto/') . $admin['foto']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="foto">Pilih Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-group">
                    <label for="foto" class="font-weight-bold text-gray-900">Foto</label>
                    <input type="file" id="foto" name="foto" class="form-control-file" placeholder="foto">
                </div> -->
            <div class="form-group">
                <div class="form-row justify-content-center">
                    <div class="col-md-5 mt-3">
                        <button type="submit" name="simpan" class="btn btn-success btn-block">Perbarui</button>
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