<?php
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{
		case 'tulis_pengaduan';
		include 'tulis_pengaduan.php';
		break;

		case 'lihat_pengaduan';
		include 'lihat_pengaduan.php';
		break;

		case 'detail_pengaduan';
		include 'detail_pengaduan.php';
		break;

		case 'lihat_tanggapan';
		include 'lihat_tanggapan.php';
		break;

		case 'pengaturan_akun';
		include 'pengaturan_akun.php';
		break;


	}
 }
 else
 {
 	?>
 	<center>
 	<h4 class="m-0 font-weight-bold text-info"><b>LAYANAN PENGADUAN MASYARAKAT (LPM)<br></h4></b>
 	<h5 class="m-0 font-weight-bold text-info"><b>DESA CICADAS KECAMATAN GUNUNGPUTRI<br></h5></b><br>
 	<font size="4">Laporan Pengaduan Masyarakat (LPM) adalah sistem aplikasi yang di fasilitasi oleh pemerintah daerah Cicadas Gunungputri, bagi masyarakat yang ingin menyampaikan aduan mengenai penyalahgunaan wewenang, pengabaian kewajiban atau pelanggaran larangan yang dilakukan oleh suatu pihak di lingkungan Desa Cicadas. Pengaduan yang berindikasi pelanggaran akan mudah ditindaklanjuti apabila memenuhi unsur sebagai berikut:</font><br><hr>
 	<h5 class="m-0 font-weight-bold text-info"><b>WHAT<br></h5></b>
 	<font size="4">Perbuatan berindikasi pelanggaran yang diketahui</font><br>
 	<h5 class="m-0 font-weight-bold text-info"><b>WHERE<br></h5></b>
 	<font size="4">Di mana perbuatan tersebut dilakukan</font><br>
  	<h5 class="m-0 font-weight-bold text-info"><b>WHEN<br></h5></b>
 	<font size="4">Kapan perbuatan tersebut dilakukan</font><br>
  	<h5 class="m-0 font-weight-bold text-info"><b>WHO<br></h5></b>
 	<font size="4">Siapa saja yang terlibat dalam perbuatan tersebut</font><br>
  	<h5 class="m-0 font-weight-bold text-info"><b>HOW<br></h5></b>
 	<font size="4">Bagaimana perbuatan tersebut dilakukan (modus, cara, dsb).</font><br><hr>
 	<?php
 }
 