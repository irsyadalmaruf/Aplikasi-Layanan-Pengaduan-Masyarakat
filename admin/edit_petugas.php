<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APPEM - Ubah Data Petugas</title>

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
<a href="?url=lihat_petugas" class="kiri btn btn-info btn-icon-split"><span class="icon text-white-60">
  <i class="kiri fas fa-arrow-left"></i></span></a>
<h5 class="tengah m-1 font-weight-bold text-info">Ubah Data Petugas</h5>
</div>
<div class="card-body">

  <?php
  require '../koneksi.php';
  $sql=mysqli_query($conn, "select * from petugas where id_petugas='$_GET[id]' ");
  if ($data=mysqli_fetch_array($sql))
  {
    ?>

  <form action="update_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group cols-sm-6">
      <label>ID Petugas</label>
      <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" class="form-control" readonly>
    </div>
    <div class="form-group cols-sm-6">
      <label>Nama Petugas</label>
      <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" class="form-control">
    </div>
    <div class="form-group cols-sm-6">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control">
    </div>
    <div class="form-group cols-sm-6">
      <label>Kata Sandi</label>
      <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control">
    </div>
        <div class="form-group cols-sm-6">
      <label>Nomor Telpon</label>
      <input type="text" name="telp" value="<?php echo $data['telp']; ?>" class="form-control">
    </div>
        <div class="form-group cols-sm-6">
      <label>Level</label>
      <select type="text" name="level" class="form-control">
        <option value="<?php echo $data['level']; ?>"><?php echo $data['level']; ?></option>
        <option value="admin">Admin</option>
        <option value="petugas">Petugas</option>
      </select>
    </div>
    </div>
    
    <div class="card">
    <center>
      <div class="card-header py-3">
      <input type="submit" value="Simpan Perubahan" class="btn btn-info btn-user" onclick="return confirm('Anda Yakin Ingin Mengubah Data Petugas?')">
    </div></center>
  </div>
</form>
<?php } ?>


<!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
