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
                    <a href="<?= base_url(); ?>admin/kelas_tambah" class="btn btn-primary mb-3">Tambah Kelas</a>
                    <thead>
                        <tr>
                            <th>Kode Kelas</th>
                            <th>Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kelas as $kls) : ?>
                            <tr>
                                <td><?= $kls['kode_kelas']; ?></td>
                                <td><?= $kls['nama']; ?></td>
                                <td><?= $kls['tahun_ajaran']; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/kelas_ubah/'); ?><?= $kls['kode_kelas']; ?>" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('admin/kelas_hapus/'); ?><?= $kls['kode_kelas']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Apa anda yakin ingin menghapus data ini ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <div class="modal fade" id="hapusKelasModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusKelasModal">Anda Yakin Ingin Hapus?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Pilih Hapus Untuk Menghapus Data</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <a class="btn btn-danger" href="">Hapus</a>
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