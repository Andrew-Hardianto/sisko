<table class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>Kelas</th>
            <th>Semester</th>
            <th>Tahun Ajaran</th>
            <th>Pengetahuan</th>
            <th>Keterampilan</th>
            <!-- <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($nilai->result() as $key => $data) : ?>
            <tr>
                <td><?= $data->nis ?></td>
                <td><?= $data->siswa_nama ?></td>
                <td><?= $data->mapel_nama ?></td>
                <td><?= $data->kelas_nama ?></td>
                <td><?= $data->semester ?></td>
                <td><?= $data->tahun_ajaran ?></td>
                <td align="center"><?= $data->t_nilai ?></td>
                <td align="center"><?= $data->praktek ?></td>
                <!-- <td align="center">
                                    <a href="<?= base_url('admin/nilai_detail/'); ?><?= $data->nis ?>" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                </td> -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>