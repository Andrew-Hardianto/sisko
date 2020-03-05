<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-gray-900"><?= $page; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Guru</th>
                            <th>Kelas</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                            <th>Pengetahuan</th>
                            <th>Keterampilan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($nil as $nil) : ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= getMapel($nil->kode_mapel) ?></td>
                                <td><?= getGuru($nil->nip_guru) ?></td>
                                <td><?= getKelas($nil->kode_kelas) ?></td>
                                <td><?= $nil->semester ?></td>
                                <td><?= $nil->tahun_ajaran ?></td>
                                <td><?= $nil->t_nilai ?></td>
                                <td><?= $nil->praktek ?></td>
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