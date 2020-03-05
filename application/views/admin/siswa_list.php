<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-900"><?= $page; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <div class="col-lg-6">
                        <?= $this->session->flashdata('flash'); ?>
                    </div>
                    <a href="<?= base_url(); ?>admin/siswa_tambah" class="btn btn-primary mb-3">Tambah Siswa</a>
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $sw) : ?>
                            <tr>
                                <td><?= $sw['nis']; ?></td>
                                <td><?= $sw['nisn']; ?></td>
                                <td><?= $sw['nama']; ?></td>
                                <td><?= $sw['jurusan']; ?></td>
                                <td><?= $sw['jenis_kelamin']; ?></td>
                                <td><?= $sw['no_telepon']; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/siswa_detail/'); ?><?= $sw['nis']; ?>" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="<?= base_url('admin/siswa_ubah/'); ?><?= $sw['nis']; ?>" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('admin/siswa_hapus/'); ?><?= $sw['nis']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Apa anda yakin ingin menghapus data ini ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <div class="modal fade" id="hapusSiswaModal" tabindex="-1" role="dialog" aria-labelledby="hapusSiswaModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusSiswaModalLabel">Anda Yakin Ingin Hapus?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <a class="btn btn-danger" href="<?= base_url('admin/siswa_hapus/'); ?><?= $sw['nis']; ?>">Hapus</a>
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