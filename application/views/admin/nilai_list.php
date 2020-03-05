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
                    <!-- <div class="form" id="cari">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <select name="" id="kelas">
                                        <option value="">- Pilih Kelas -</option>
                                        <?php foreach ($kelas->result() as $key => $data) : ?>
                                            <option value="<?= $data->kode_kelas ?>"><?= $data->nama ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <select name="" id="semester">
                                        <option value="">- Pilih Semester -</option>
                                        <?php foreach ($nilai->result() as $key => $data) : ?>
                                            <option value="<?= $data->semester ?>"><?= $data->semester ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <a href="" class="btn btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#cetak_rapor">
                        <span class="icon text-white-50">
                            <i class="fas fa-print"></i>
                        </span>
                        <span class="text">CETAK</span></a>
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
                        <div class="modal fade" id="cetak_rapor" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold text-gray-900" id="cetak_rapor">Cetak</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/cetak'); ?>" method="post" target="_blank">
                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col-md-12 mt-3">
                                                        <label class="font-weight-bold text-gray-900">Nama</label>
                                                        <select type="text" class="form-control" name="nis" required>
                                                            <option value="">Pilih Siswa</option>
                                                            <?php foreach ($siswa->result() as $key => $data) : ?>
                                                                <option value="<?= $data->nis ?>"><?= $data->nama ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="font-weight-bold text-gray-900">Kelas</label>
                                                        <select type="text" class="form-control" name="kelas" required>
                                                            <option value="">Pilih Kelas</option>
                                                            <?php foreach ($kelas->result() as $key => $data) : ?>
                                                                <option value="<?= $data->kode_kelas ?>"><?= $data->nama ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="font-weight-bold text-gray-900">Semester</label>
                                                        <select type="text" class="form-control" name="semester" required>
                                                            <option value="">Pilih Semester</option>
                                                            <option value="Ganjil">Ganjil</option>
                                                            <option value="Genap">Genap</option>
                                                        </select>
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