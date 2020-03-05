<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RAPOR</title>
</head>

<body>
    <?php
    $query = $this->db->select('*')
        ->from('nilai')
        ->get();
    $row = $query->row();
    $nis = $row->nis;
    $kelas    = $row->kode_kelas;
    $semester  = $row->semester;
    $tahun  = $row->tahun_ajaran;
    ?>
    <table style="height: 73px; font-size: 12px; margin-bottom: 5px" width="100%">
        <tbody>
            <tr>
                <td style="width: 20%;">Nama Peserta Didik</td>
                <td style="width: 30%;">: <?= getSwa($row->nis) ?></td>
                <td style="width: 20%;">Kelas</td>
                <td style="width: 20%;">: <?= getKelas($row->kode_kelas) ?></td>
            </tr>
            <tr>
                <td style="width: 20%;">Nomor Induk Siswa</td>
                <td style="width: 30%;">: <?= $row->nis ?></td>
                <td style="width: 20%;">Semester</td>
                <td style="width: 20%;">: <?= $row->semester ?></td>
            </tr>
            <tr>
                <td style="width: 20%;">Nama Sekolah</td>
                <td style="width: 30%;">: SMA Tamansiswa Bekasi</td>

                <td style="width: 20%;">Tahun Ajaran</td>
                <td style="width: 20%;">: <?= $row->tahun_ajaran ?></td>
            </tr>
        </tbody>
    </table>

    <!-- <hr class="little-title" style="margin-bottom: 10px"> -->

    <table border="1" cellpadding="5" cellspacing="0" style="margin-bottom: 30px; font-size: 12px">
        <thead>
            <!-- <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>KKM</th>
                <th>Pengetahuan</th>
                <th>Keterampilan</th>
            </tr> -->
            <tr>
                <th width="37" rowspan="3">
                    <p align="center">
                        no
                    </p>
                </th>
                <th width="100" rowspan="3">
                    <p align="center">
                        Mata Pelajaran
                    </p>
                </th>
                <th width="468" colspan="6" valign="top">
                    <p align="center">
                        Hasil Belajar
                    </p>
                </th>
            </tr>
            <tr>
                <th width="78">
                    <p align="center">
                        KKM
                    </p>
                </th>
                <th width="156" colspan="2" valign="top">
                    <p align="center">
                        Pengetahuan
                    </p>
                </th>
                <th width="156" colspan="2" valign="top">
                    <p align="center">
                        Keterampilan
                    </p>
                </th>
                <th width="78" valign="top">
                    <p align="center">
                        Sikap
                    </p>
                </th>
            </tr>
            <tr>
                <th width="78" valign="top">
                    <p align="center">
                        Angka
                    </p>
                </th>
                <th width="78" valign="top">
                    <p align="center">
                        Angka
                    </p>
                </th>
                <th width="78" valign="top">
                    <p align="center">
                        Huruf
                    </p>
                </th>
                <th width="78" valign="top">
                    <p align="center">
                        Angka
                    </p>
                </th>
                <th width="78" valign="top">
                    <p align="center">
                        Huruf
                    </p>
                </th>
                <th width="78" valign="top">
                    <p align="center">
                        Predikat
                    </p>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($nilai as $data) : ?>
                <tr height="30px">
                    <td><?= $no++ ?>.</td>
                    <td width="250px"><?= getMapel($data->kode_mapel) ?></td>
                    <td align="center">60</td>
                    <td align="center"><?= $data->t_nilai ?></td>
                    <td align="center"><?= angkaketulisan($data->t_nilai) ?></td>
                    <td align="center"><?= $data->praktek ?></td>
                    <td align="center"><?= angkaketulisan($data->praktek) ?></td>
                    <td align="center"><?= $data->predikat ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table style="height: 73px; font-size: 12px" width="100%">
        <tbody>
            <tr>
                <td style="width: 30%;" align="center">Mengetahui</td>
                <td style="width: 30%;"></td>
                <td style="width: 30%; padding-top:10px" align="center">Bekasi, <?= tgl_indonesia(date('Y-m-d')) ?></td>
            </tr>
            <tr>
                <td style="width: 30%;" align="center">Orangtua /Wali Peserta Didik</td>
                <td style="width: 30%;"></td>
                <td style="width: 30%;" align="center">Wali Kelas</td>
            </tr>
            <tr>
                <td style="width: 30%; padding-top:70px" align="center">(.....................................)</td>
                <td style="width: 30%;"></td>
                <td style="width: 30%; padding-top:70px" align="center">(.....................................)</td>
            </tr>
            <!-- <tr>
                <td style="width: 30%;" ></td>
                <td style="width: 30%; padding-top:10px" align="center">Bekasi, <?= tgl_indonesia(date('Y-m-d')) ?></td>
                <td style="width: 30%;"></td>
            </tr> -->
            <!-- <tr>
                <td style="width: 30%;" ></td>
                <td style="width: 30%;" align="center">Kepala Sekolah</td>
                <td style="width: 30%;"></td>
            </tr>
            <tr>
                <td style="width: 30%;"></td>
                <td style="width: 30%; padding-top:70px" align="center">(.....................................)</td>
                <td style="width: 30%;"></td>
            </tr> -->
        </tbody>
    </table>

</body>

</html>