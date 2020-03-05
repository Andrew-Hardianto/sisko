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
    <h4 align="center">DATA PENERIMAAN SISWA BARU</h4>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Pendaftaran</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Asal Sekolah</th>
                <th>Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($psb as $data) : ?>
                <tr>
                    <td><?= $no++ ?>.</td>
                    <td><?= $data->kode_pendaftaran ?></td>
                    <td><?= $data->nisn ?></td>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->alamat ?></td>
                    <td><?= $data->jenis_kelamin ?></td>
                    <td><?= $data->asal_sekolah ?></td>
                    <td><?= $data->tgl_daftar ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>