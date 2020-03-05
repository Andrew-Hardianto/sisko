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
                    <a href="<?= base_url(); ?>admin/guru_tambah" class="btn btn-primary mb-3">Tambah Guru</a>
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>NUPTK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Pendidikan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($guru as $gr) : ?>
                            <tr>
                                <td><?= $gr['nip_guru']; ?></td>
                                <td><?= $gr['nuptk']; ?></td>
                                <td><?= $gr['nama']; ?></td>
                                <td><?= $gr['jenis_kelamin']; ?></td>
                                <td><?= $gr['pendidikan']; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/guru_detail/'); ?><?= $gr['nip_guru']; ?>" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="<?= base_url('admin/guru_ubah/'); ?><?= $gr['nip_guru']; ?>" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('admin/guru_hapus/'); ?><?= $gr['nip_guru']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Apa anda yakin ingin menghapus data ini ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <div class="modal fade" id="hapusGuruModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusGuruModal">Anda Yakin Ingin Hapus?</h5>
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