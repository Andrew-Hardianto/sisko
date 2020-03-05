<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-900"><?= $page; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#cetak_psb">
                        <span class="icon text-white-50">
                            <i class="fas fa-print"></i>
                        </span>
                        <span class="text">CETAK</span></a>
                    <thead>
                        <tr>
                            <th>Kode Pendaftaran</th>
                            <!-- <th>NISN</th> -->
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th>Unggah Berkas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($psb as $p) :
                            $jk = ($p['jenis_kelamin'] == 'Laki-Laki') ? " <a href='' class='btn btn-primary btn-circle btn-sm'>
                                        <i class='fas fa-male'></i></a>" : " <a href='' class='btn btn-danger btn-circle btn-sm'>
                                        <i class='fas fa-female'></i></a>";
                        ?>
                            <tr>
                                <td><?= $p['kode_pendaftaran']; ?></td>
                                <!-- <td><?= $p['nisn']; ?></td> -->
                                <td><?= $p['nama'];
                                    echo $jk; ?></td>
                                <td><?= $p['asal_sekolah']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/unggah_berkas/'); ?><?= $p['kode_pendaftaran']; ?>" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="text">Unggah</span>
                                    </a>
                                </td>
                                <td align="center">
                                    <a href="<?= base_url('admin/verifikasi/'); ?><?= $p['kode_pendaftaran']; ?>" type="submit" class="btn btn-success btn-circle btn-sm">
                                        <i class="fas fa-check"></i>
                                    </a>
                                    <a href="<?= base_url('admin/psb_detail/'); ?><?= $p['kode_pendaftaran']; ?>" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="<?= base_url('admin/psb_hapus/'); ?><?= $p['kode_pendaftaran']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Apa anda yakin ingin menghapus data ini ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <div class="modal fade" id="unggah" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold text-gray-900" id="unggah">Unggah Berkas</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?= form_open_multipart('admin/unggah_berkas'); ?>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <!-- <div class="col-md-6 mt-3">
                                                        <label class="font-weight-bold text-gray-900">KTP</label>
                                                        <input type="file" class="form-control-file" name="ktp" id="ktp" >
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="font-weight-bold text-gray-900">Bukti Pembayaran</label>
                                                        <input type="file" class="form-control-file" name="bukti" id="bukti">
                                                    </div> -->
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="kode">Kode Pendaftaran</label>
                                                        <input type="text" id="kode" name="kode" class="form-control" placeholder="kode pendaftaran" value="<?= $p['kode_pendaftaran']; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="custom-file col-md-6 mt-3 mr-1">
                                                    <input type="file" class="custom-file-input" name="ktp" id="ktp">
                                                    <label class="custom-file-label font-weight-bold text-gray-900" for="ktp">KTP</label>
                                                </div>
                                                <div class="custom-file col-md-5 mt-3">
                                                    <input type="file" class="custom-file-input" name="bukti" id="bukti">
                                                    <label class="custom-file-label font-weight-bold text-gray-900" for="ktp">BUKTI</label>
                                                </div>
                                                <div class="col-md-3 mt-3">
                                                    <button type="submit" name="unggah" class="btn btn-primary">Unggah</button>
                                                </div>

                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="cetak_psb" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold text-gray-900" id="cetak_psb">Cetak PDF PSB</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/cetak_psb'); ?>" method="post" target="_blank">
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-6 mt-3">
                                                        <label class="font-weight-bold text-gray-900">Dari Tanggal</label>
                                                        <input type="date" class="form-control" name="tgl_a" required>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="font-weight-bold text-gray-900">Sampai Tanggal</label>
                                                        <input type="date" class="form-control" name="tgl_b" required>
                                                    </div>
                                                    <div class="col-md-3 mt-3">
                                                        <button type="submit" name="cetak_p" class="btn btn-primary">Cetak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->