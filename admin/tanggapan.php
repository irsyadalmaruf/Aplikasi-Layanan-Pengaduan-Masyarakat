<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APPEM - Detail Pengaduan</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <style media="screen">
      .judul {
        width: 100%;
      }
      .kiri{
        float: left;
      }

      .tengah{
        text-align-last: center; 
      }
  </style>

</head>

<body id="page-top">

<div class="card shadow mb-4">
<div class="card-header py-3">
<a href="?url=verifikasi_pengaduan" class="kiri btn btn-info btn-icon-split"><span class="icon text-white-60">
<i class="kiri fas fa-arrow-left"></i></span></a>
<h5 class="tengah m-1 font-weight-bold text-info">Form Tanggapan</h5>
</div>

<div class="card-body">

  <form action="simpan_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">

    <div class="form-group cols-sm-6">
      <label>ID Pengaduan</label>
      <input type="text" name="id_pengaduan" value="<?php echo $_GET['id']; ?>" class="form-control" readonly>
    </div>

    <div class="form-group cols-sm-6">
      <label>Tanggal Tanggapan</label>
      <input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
    </div>
  
    <div class="form-group cols-sm-6">
      <label>Isi Tanggapan</label>
      <textarea class="form-control" rows="7" name="tanggapan" required placeholder="Tulis Tanggapan"></textarea>
    </div>

    <div class="form-group cols-sm-6">
      <label>ID Petugas</label>
      <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control" readonly>
    </div>
    </div>

    <div class="card">
    <center><div class="card-header py-3">
    <input type="submit" class="btn btn-info" value="Tanggapi Pengaduan" name="" onclick="return confirm('Anda Yakin Ingin Menanggapi Pengaduan Ini?')">
    <input type="reset" value="Kosongkan" class="btn btn-warning">
  </div>

  </form>
</div>

<!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
