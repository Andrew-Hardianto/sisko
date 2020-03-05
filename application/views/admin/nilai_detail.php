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
                    <!-- <a href="<?= base_url('admin/rapor'); ?>" class="btn btn-primary btn-icon-split mb-3">
                        <span class="icon text-white-50">
                            <i class="fas fa-print"></i>
                        </span>
                        <span class="text">CETAK RAPOR</span></a> -->
                    <thead>
                        <tr>
                            <th>Kode Mapel</th>
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
                        foreach ($nilai->result() as $key => $data) : ?>
                            <tr>
                                <td><?= $data->kode_mapel ?></td>
                                <td><?= $data->mapel_nama ?></td>
                                <td><?= $data->guru_nama ?></td>
                                <td><?= $data->kelas_nama ?></td>
                                <td><?= $data->semester ?></td>
                                <td><?= $data->tahun_ajaran ?></td>
                                <td align="center"><?= $data->t_nilai ?></td>
                                <td align="center"><?= $data->praktek ?></td>
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
<!-- <script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            'bFilter': false
        });
    });
</script> -->