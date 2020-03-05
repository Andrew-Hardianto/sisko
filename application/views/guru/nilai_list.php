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
                    <div class="col-lg-6">
                        <?= $this->session->flashdata('flash'); ?>
                    </div>
                    <a href="<?= base_url(); ?>guru/nilai_tambah" class="btn btn-primary mb-3">Tambah Nilai</a>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Siswa</th>
                            <th>Mata Pelajaran</th>
                            <th>Kelas</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                            <th>Pengetahuan</th>
                            <th>Keterampilan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($nilai as $data) : ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= $data->nis ?></td>
                                <td><?= getSwa($data->nis) ?></td>
                                <td><?= getMapel($data->kode_mapel) ?></td>
                                <td><?= getKelas($data->kode_kelas) ?></td>
                                <td><?= $data->semester ?></td>
                                <td><?= $data->tahun_ajaran ?></td>
                                <td><?= $data->t_nilai ?></td>
                                <td><?= $data->praktek ?></td>
                                <td align="center">
                                    <a href="<?= base_url('guru/nilai_ubah/'); ?><?= $data->id_nilai ?>" class="btn btn-success btn-circle btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('guru/nilai_hapus/'); ?><?= $data->id_nilai ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Kamu yakin ingin menghapus data ini ?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->