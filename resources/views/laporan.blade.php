<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:Arial,serif;font-size:14.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Arial,serif;font-size:14.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_003{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Arial,serif;font-size:11.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:Arial,serif;font-size:14.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_004{font-family:Arial,serif;font-size:14.0px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
-->
</style>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="bg_laporan_file/background1.jpg" width=612 height=792></div>
<div style="position:absolute;left:210.79px;top:34.34px" class="cls_002"><span class="cls_002">TAMAN BACA MASYARAKAT</span></div>
<div style="position:absolute;left:181.99px;top:58.58px" class="cls_002"><span class="cls_002">GENERASI MARGA MULYA INOVATIF</span></div>
<div style="position:absolute;left:94.58px;top:83.06px" class="cls_003"><span class="cls_003">Jalan Teuku Umar Dusun II Desa Marga Mulya Kec. Bumi Agung Kab. Lampung Timur</span></div>
<div style="position:absolute;left:173.83px;top:120.53px" class="cls_004"><span class="cls_004">TANDA BUKTI SERAH TERIMA DONASI</span></div>
<div style="position:absolute;left:355.58px;top:185.33px" class="cls_003"><span class="cls_003">Marga Mulya, {{ date('d-m-Y') }}</span></div>
<div style="position:absolute;left:72.02px;top:212.23px" class="cls_003"><span class="cls_003">Yang bertanda tangan dibawah ini:</span></div>
<div style="position:absolute;left:142.85px;top:239.35px" class="cls_003"><span class="cls_003">Nama</span></div>
<div style="position:absolute;left:219.19px;top:239.35px" class="cls_003"><span class="cls_003">: ………………………………………………………</span></div>
<div style="position:absolute;left:142.85px;top:266.23px" class="cls_003"><span class="cls_003">Jabatan</span></div>
<div style="position:absolute;left:219.19px;top:266.23px" class="cls_003"><span class="cls_003">: ………………………………………………………</span></div>
<div style="position:absolute;left:142.85px;top:293.14px" class="cls_003"><span class="cls_003">Alamat</span></div>
<div style="position:absolute;left:219.19px;top:293.14px" class="cls_003"><span class="cls_003">: ………………………………………………………</span></div>
<div style="position:absolute;left:72.02px;top:320.26px" class="cls_003"><span class="cls_003">Dengan ini menyatakan bahwa :</span></div>
<div style="position:absolute;left:142.85px;top:347.14px" class="cls_003"><span class="cls_003">Nama Donatur</span></div>
<div style="position:absolute;left:252.10px;top:347.14px" class="cls_003"><span class="cls_003">: {{ $donasi->User->nama }}</span></div>
<div style="position:absolute;left:142.85px;top:374.04px" class="cls_003"><span class="cls_003">Alamat</span></div>
<div style="position:absolute;left:252.10px;top:374.04px" class="cls_003"><span class="cls_003">: {{ $donasi->User->alamat }}</span></div>
<div style="position:absolute;left:142.85px;top:401.16px" class="cls_003"><span class="cls_003">Tanggal</span></div>
<div style="position:absolute;left:252.10px;top:401.16px" class="cls_003"><span class="cls_003">: {{ implode('-',array_reverse(explode('-', $donasi->tanggal))) }}</span></div>
<div style="position:absolute;left:142.85px;top:428.04px" class="cls_003"><span class="cls_003">No Telpon</span></div>
<div style="position:absolute;left:252.10px;top:428.04px" class="cls_003"><span class="cls_003">: {{ $donasi->User->no_telepon }}</span></div>
<div style="position:absolute;left:142.85px;top:455.18px" class="cls_003"><span class="cls_003">Jenis Donasi</span></div>
<div style="position:absolute;left:252.10px;top:455.18px" class="cls_003"><span class="cls_003">: {{ $donasi->jenis_donasi }}</span></div>
<div style="position:absolute;left:142.85px;top:482.06px" class="cls_003"><span class="cls_003">Jumlah/Pack</span></div>
<div style="position:absolute;left:252.10px;top:482.06px" class="cls_003"><span class="cls_003">: {{ $donasi->jumlah_donasi }}</span></div>
<div style="position:absolute;left:72.02px;top:508.94px" class="cls_003"><span class="cls_003">Demikian tanda bukti serah terima donasi in dibuat</span></div>
<div style="position:absolute;left:108.05px;top:590.09px" class="cls_003"><span class="cls_003">Atas nama donator</span></div>
<div style="position:absolute;left:402.38px;top:590.09px" class="cls_003"><span class="cls_003">Penerima donasi</span></div>
<div style="position:absolute;left:108.05px;top:643.87px" class="cls_003"><span class="cls_003">{{ $donasi->User->nama }}</span></div>
<div style="position:absolute;left:396.14px;top:643.87px" class="cls_003"><span class="cls_003">{{ $donasi->nama_penerima }}</span></div>
</div>

</body>
</html>
