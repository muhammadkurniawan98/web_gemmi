<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Nilai Siswa</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <style>
        .line-title{
            border: 0;
            border-style: inset;
            border-top: 4px solid #000;
        }
    </style>
</head>
<body>
    <img src="<?php echo e(asset('/assets/img/logo1.png')); ?>" style="position: absolute; width: 80px; height: auto;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="font-weight: bold; font-size: 14px;">
                    LAPORAN DATA NILAI SISWA SMK WIRATAMA KOTAGAJAH
                    <br>JL. JENDRAL SUDIRMAN NO. 17, Kec. Kota Gajah Lampung Tengah - Lampung
                    <br>Telp 072545866, Fax 072545866, Email smkwiratamakoga@gmail.com
                </span>
            </td>
        </tr>
    </table>

    <hr class="line-title">

    <table style="margin-top: 2px;">
        <tbody>
            <tr>
                <td >Mata Pelajaran</td>
                <td >:</td>
                <td>Matematika</td>
            </tr>
            <tr>
                <td >Pertemuan Ke</td>
                <td >:</td>
                <td>11</td>
            </tr>
            <tr>
                <td >Nama Tugas</td>
                <td >:</td>
                <td>Aljabar</td>
            </tr>
        </tbody>
    </table>
    
    <table class="static" align="center" rules="all" border="1px" style="width: 100%; margin-top: 10px;">
        <thead>
            <tr>
                <th style="text-align: center">NO</th>
                <th style="text-align: center">NAMA SISWA</th>
                <th style="text-align: center">NILAI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">1</td>
                <td>Jack</td>
                <td style="text-align: center">90</td>
            </tr>
            <tr>
                <td style="text-align: center">2</td>
                <td>John</td>
                <td style="text-align: center">75</td>
            </tr>
        </tbody>
    </table>
</body>
</html><?php /**PATH D:\project_website\github\clone\web_gemmi\resources\views/export.blade.php ENDPATH**/ ?>