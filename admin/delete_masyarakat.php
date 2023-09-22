<?php 
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($conn,"delete from masyarakat where nik='$id' ");

if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Dihapus');
		window.location='admin.php?url=lihat_masyarakat';
	</script>
	<?php
}
?>