<?php
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch($url)
	{

		case 'verifikasi_pengaduan';
		include 'verifikasi_pengaduan.php';
		break;

    case 'detail_pengaduan';
    include 'detail_pengaduan.php';
    break;

    case 'tanggapan';
    include 'tanggapan.php';
    break;

    case 'lihat_petugas';
    include 'lihat_petugas.php';
    break;

    case 'tambah_petugas';
    include 'tambah_petugas.php';
    break;

    case 'edit_petugas';
    include 'edit_petugas.php';
    break;

    case 'lihat_masyarakat';
    include 'lihat_masyarakat.php';
    break;

    case 'lihat_pengaduan';
    include 'lihat_pengaduan.php';
    break;

    case 'lihat_tanggapan';
    include 'lihat_tanggapan.php';
    break;

    case 'detail_tanggapan';
    include 'detail_tanggapan.php';
    break;

    case 'edit_tanggapan';
    include 'edit_tanggapan.php';
    break;


	}
 }
 else
 {
 	?>
 	<center>
 	<h4 class="m-0 font-weight-bold text-info"><b>LAYANAN PENGADUAN MASYARAKAT (LPM)<br></h4></b>
 	<h5 class="m-0 font-weight-bold text-info"><b>DESA CICADAS KECAMATAN GUNUNGPUTRI<br></h5></b><br>
 	<font size="4">Laporan Pengaduan Masyarakat (LPM) adalah sistem aplikasi yang di fasilitasi oleh pemerintah daerah Cicadas Gunungputri, bagi masyarakat yang ingin menyampaikan aduan mengenai penyalahgunaan wewenang, pengabaian kewajiban atau pelanggaran larangan yang dilakukan oleh suatu pihak di lingkungan Desa Cicadas.</font><br><hr>

<?php
date_default_timezone_set('Asia/Jakarta');
$jam=date("G");
if($jam>=0&&$jam<=4)
$sapa="SELAMAT DINI HARI ";
else if($jam>=5&&$jam<=10)
$sapa="SELAMAT PAGI ";
else if($jam>=11&&$jam<=15)
$sapa="SELAMAT SIANG ";
else if($jam>=16&&$jam<=18)
$sapa="SELAMAT SORE ";
else if($jam>=19&&$jam<=23)
$sapa="SELAMAT MALAM ";
?>

<style type="text/css">
  .upper { text-transform: uppercase; }
</style>

<h5 class="upper m-0 font-weight-bold text-info">
<?php echo $sapa; ?><b><?php echo $_SESSION['nama']; ?>!</b> DAN SELAMAT BEKERJA!</h5><br>

 	<?php

 	require '../koneksi.php';
 	$sql=mysqli_query($conn,"select * from pengaduan where status='proses'");
 	if ($cek=mysqli_num_rows($sql))
 	{

 	?>


    <h5 class="m-0 font-weight-bold text-info"><b>NOTIFIKASI TERKINI<br></h5></b><br>
 		<div class="col-xl-5 col-md-5 mb-5">
              <div class="card border-left-info shadow h-100 py-0">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Pengaduan Dari Masyarakat</div><br>
                      <div class=" font-weight-bold text-info text-uppercase mb-1"><a href="?url=verifikasi_pengaduan">Klik Untuk Melihat 
                      </a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-country"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php 
}
else
{
  ?>

  <h5 class="m-0 font-weight-bold text-info"><b>NOTIFIKASI TERKINI<br></h5></b><br>
  <div class="col-xl-5 col-md-5 mb-5">
              <div class="card border-left-info shadow h-100 py-0">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Tidak Ada Pengaduan Dari Masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-country"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

  <?php
}
}