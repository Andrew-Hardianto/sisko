<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-900 text-center font-weight-bold"><?= $page; ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open('guru/nilai_tambah'); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nis" class="font-weight-bold text-gray-900">NIS</label>
                        <input list="data_siswa" class="form-control" id="nis" name="nis" onchange="return autofill();" value="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="siswa" class="font-weight-bold text-gray-900">Nama Siswa</label>
                        <input type="text" class="form-control" id="siswa" value="" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kode_mapel" class="font-weight-bold text-gray-900">Kode Mata Pelajaran</label>
                        <input class="form-control" list="data_mapel" id="kode_mapel" name="kode_mapel" onchange="return autofills();" value="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mapel" class="font-weight-bold text-gray-900">Mata Pelajaran</label>
                        <input type="text" class="form-control" id="mapel" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nip" class="font-weight-bold text-gray-900">NIP GURU</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kelas" class="font-weight-bold text-gray-900">Kelas</label>
                        <select type="text" class="form-control" id="kelas" name="kelas" value="" required>
                            <option value="">- Pilih Kelas -</option>
                            <?php foreach ($kelas->result() as $key => $data) : ?>
                                <option value="<?= $data->kode_kelas ?>"><?= $data->nama ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="semester" class="font-weight-bold text-gray-900">Semester</label>
                        <select type="text" class="form-control" id="semester" name="semester" value="" required>
                            <Option>- Pilih Semester -</Option>
                            <Option value="Ganjil">GANJIL</Option>
                            <Option value="Genap">GENAP</Option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tahun" class="font-weight-bold text-gray-900">Tahun Ajaran</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" value="" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tugas" class="font-weight-bold text-gray-900">Tugas</label>
                        <input type="text" class="form-control" id="tugas" name="tugas" value="" onkeyup="sum();grade();" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="uts" class="font-weight-bold text-gray-900">UTS</label>
                        <input type="text" class="form-control" id="uts" name="uts" value="" onkeyup="sum();grade();" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="uas" class="font-weight-bold text-gray-900">UAS</label>
                        <input type="text" class="form-control" id="uas" name="uas" value="" onkeyup="sum();grade();" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nilai" class="font-weight-bold text-gray-900">Total Nilai</label>
                        <input type="text" class="form-control" id="nilai" name="nilai" value="" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="praktek" class="font-weight-bold text-gray-900">Praktek</label>
                        <input type="text" class="form-control" id="praktek" name="praktek" value="" onkeyup="sum2();grade();" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="predikat" class="font-weight-bold text-gray-900">Predikat</label>
                        <input type="text" class="form-control" id="predikat" name="predikat" value="" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="huruf" name="huruf" value="">
                    </div>
                </div>
            </div>
            <div class=" form-group">
                <div class="form-row justify-content-center">
                    <div class="col-md-3 mt-3">
                        <button type="submit" name="simpan" class="btn btn-success btn-block">Submit</button>
                    </div>
                    <div class="col-md-3 mt-3">
                        <a class="btn btn-success btn-block" href="<?= base_url('guru/nilai'); ?>">Batal</a>
                    </div>
                </div>
            </div>
            </form>
            <datalist id="data_siswa">
                <?php
                foreach ($siswa->result() as $key => $data) {
                    echo "<option value='$data->nis'>$data->nama</option>";
                }
                ?>

            </datalist>
            <datalist id="data_mapel">
                <?php
                foreach ($mapel->result() as $key => $data) {
                    echo "<option value='$data->kode_mapel'>$data->nama</option>";
                }
                ?>

            </datalist>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
</div>
<script>
    function autofill() {
        var nis = document.getElementById('nis').value;
        $.ajax({
            url: "<?= base_url('guru/cariSiswa'); ?>",
            data: '&nis=' + nis,
            success: function(data) {
                var hasil = JSON.parse(data);

                $.each(hasil, function(key, val) {

                    document.getElementById('nis').value = val.nis;
                    document.getElementById('siswa').value = val.nama;
                });
            }
        });

    }
</script>
<script>
    function autofills() {
        var kode_mapel = document.getElementById('kode_mapel').value;
        $.ajax({
            url: "<?= base_url('guru/cariMapel'); ?>",
            data: '&kode_mapel=' + kode_mapel,
            success: function(data) {
                var hasil = JSON.parse(data);

                $.each(hasil, function(key, val) {
                    document.getElementById('kode_mapel').value = val.kode_mapel;
                    document.getElementById('mapel').value = val.nama;
                    document.getElementById('nip').value = val.nip_guru;
                });
            }
        });

    }
</script>
<script>
    function sum() {
        var tugas = document.getElementById('tugas').value;
        var uts = document.getElementById('uts').value;
        var uas = document.getElementById('uas').value;
        var nilai = document.getElementById('nilai').value;
        var praktek = document.getElementById('praktek').value;
        var huruf = document.getElementById('huruf').value;

        var hasil = (parseInt(tugas) * 0.3) + (parseInt(uts) * 0.3) + (parseInt(uas) * 0.4);
        if (!isNaN(hasil)) {
            document.getElementById('nilai').value = Math.round(hasil);
        }
        // var hasil2 = (parseInt(nilai) * 0.5) + (parseInt(praktek) * 0.5);
        // if (!isNaN(hasil)) {
        //     document.getElementById('huruf').value = Math.round(hasil2);
        // }
    }
</script>
<script>
    function sum2() {
        var nilai = document.getElementById('nilai').value;
        var praktek = document.getElementById('praktek').value;
        var huruf = document.getElementById('huruf').value;

        var hasil = (parseInt(nilai) * 0.5) + (parseInt(praktek) * 0.5);
        if (!isNaN(hasil)) {
            document.getElementById('huruf').value = Math.round(hasil);
        }
    }
</script>
<script type="text/javascript">
    function grade() {
        var na = document.getElementById('huruf').value;
        if (document.getElementById('huruf').value == 0) {
            document.getElementById('predikat').value = "F";
        } else if (document.getElementById('huruf').value <= 44) {
            document.getElementById('predikat').value = "E";
        } else if (document.getElementById('huruf').value >= 45 && document.getElementById('huruf').value <= 59) {
            document.getElementById('predikat').value = "D";
        } else if (document.getElementById('huruf').value >= 60 && document.getElementById('huruf').value <= 69) {
            document.getElementById('predikat').value = "C";
        } else if (document.getElementById('huruf').value >= 70 && document.getElementById('huruf').value <= 84) {
            document.getElementById('predikat').value = "B";
        } else if (document.getElementById('huruf').value >= 85 && document.getElementById('huruf').value <= 100) {
            document.getElementById('predikat').value = "A";
        } else {
            document.getElementById('predikat').value = null;
        }
    }
</script>