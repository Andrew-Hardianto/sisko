<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Pendaftaran</title>
    <style>
        .line-title {
            border: 0;
            border-style: unset;
            border-top: 1px solid #000;
        }

        div {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .pop tr td {
            height: 40px;
        }
    </style>
</head>

<body>
    <!-- <img src="<?= base_url('assets/'); ?>img/sma.png" style="position:absolute; width:80px; height:auto;"> -->
    <!-- <table style="width:100%">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-weight:bold;">
                    <h3>PERGURUAN TAMANSISWA CABANG BEKASI
                        <br>SMA TAMANSISWA <br> STATUS TERAKREDITASI "A"</h3>
                    <h6>Jl. Selecta Raya No.2 Perum Bumi Bekasi Baru Rawalumbu Bekasi 17115
                        <br>Telp. (021) 8205858, Fax :(021) 8205858; email:smatamasiswabekasi@gmail.com
                    </h6>
                </span>
            </td>
        </tr>
    </table> -->
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
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
    <h3 align="center">BUKTI PENDAFTARAN</h3>
    <?php
    foreach ($bukti->result() as $key => $data) : ?>
        <div align="center" margin-top="5px">
            <img src="<?= base_url('assets/img/foto/') . $data->foto ?>" width="150px">
        </div>
    <?php endforeach; ?>

    <table class="pop" style="font-size:15px; width:80%; height:100% ">

        <?php
        foreach ($bukti->result() as $key => $data) : ?>
            <tr>
                <td width="150px">Kode Pendaftaran</td>
                <td>: <?= $data->kode_pendaftaran ?></td>
            </tr>
            <tr>
                <td width="150px">NISN </td>
                <td>: <?= $data->nisn ?></td>
            </tr>
            <tr>
                <td width="150px">Nama </td>
                <td>: <?= $data->nama ?></td>
            </tr>
            <tr>
                <td width="150px">Tempat Lahir </td>
                <td>: <?= $data->tempat_lahir ?></td>
            </tr>
            <tr>
                <td width="150px">Tanggal Lahir </td>
                <td>: <?= $data->tanggal_lahir ?></td>
            </tr>
            <tr>
                <td width="150px">Jenis Kelamin </td>
                <td>: <?= $data->jenis_kelamin ?></td>
            </tr>
            <tr>
                <td width="150px">Alamat </td>
                <td>: <?= $data->alamat ?></td>
            </tr>
            <tr>
                <td width="150px">Nama Ayah</td>
                <td>: <?= $data->nama_ayah ?></td>
            </tr>
            <tr>
                <td width="150px">Nama Ibu</td>
                <td>: <?= $data->nama_ibu ?></td>
            </tr>
            <tr>
                <td width="150px">Asal Sekolah </td>
                <td>: <?= $data->asal_sekolah ?></td>
            </tr>
            <tr>
                <td width="150px">No. Telepon</td>
                <td>: <?= $data->no_telepon ?></td>
            </tr>
            <tr>
                <td width="150px">Jurusan Yang Dipilih </td>
                <td>: <?= $data->jurusan ?></td>
            </tr>
            <tr>
                <td width="150px">Tanggal Daftar</td>
                <td>: <?= $data->tgl_daftar ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>