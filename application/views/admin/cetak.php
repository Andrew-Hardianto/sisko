<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Nilai</title>
    <style>
        .line-title {
            border: 0;
            border-style: unset;
            border-top: 1px solid #000;
        }
    </style>
</head>

<body>
    <!-- <img src=" <?= base_url('assets/'); ?>img/sma.png" style="position:absolute; width:100px; height:auto;"> -->

    <table border="0" cellspacing="0" cellpadding="0" width="80%">
        <tbody>
            <tr>
                <td width="60" valign="top" align="center">
                    <p>
                        <img src="<?= base_url('assets/'); ?>img/sma.png" style="position:absolute; width:100px; height:auto;" />
                    </p>
                </td>
                <td width="500" align="center">
                    <h3>
                        <strong>PERGURUAN TAMANSISWA CABANG BEKASI</strong>
                    </h3>
                    <h3>
                        <strong>SMA TAMANSISWA</strong>
                        <strong></strong>
                    </h3>
                    <h4>
                        <strong>STATUS : TERAKREDITASI “ A “</strong>
                    </h4>
                    <h6>
                        JL. Selecta Raya No. 2 Perum Bumi Bekasi Baru Rawalumbu
                        Bekasi 17115
                    </h6>
                    <h6>
                        Telp.(021) 820585. FAX : (021) 8205858; email :smatamansiswabekasi@gmail.com
                    </h6>
                </td>
            </tr>
        </tbody>
    </table>
    <hr class="little-title">
    <h4 align="center">DATA NILAI SISWA</h4>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Mata Pelajaran</th>
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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>