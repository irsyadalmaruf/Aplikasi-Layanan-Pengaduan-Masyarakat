<?php

require '../koneksi.php';
$tanggapan=$_POST['isi_laporan'];
$id=$_POST['id_pengaduan'];

$sql=mysqli_query($conn,"update tanggapan set tanggapan='$tanggapan' where id_pengaduan='$id'");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert('Data Berhasil Diubah')
		window.location="admin.php?url=lihat_tanggapan";
	</script>

<?php
}

?>

