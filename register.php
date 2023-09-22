<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>APPEM - Daftar</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style media="screen">
    body, html {
    }
 
    .bg {
    background-image: url("bg2.jpg");

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }

    .kanan{
        float: right;
      }

  </style>

</head>

<body class="bg">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6  col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h5 text-gray-900 mb-4"><b>BUAT AKUN BARU<hr>
                  </div>
                  <form class="user" method="post" action="simpan_masyarakat.php">
                    <label class="small"><b>NIK</b><label><font color="red">&thinsp;*</font></label></label>
                    <div class="form-group">
                      <input type="text" name="nik" class="form-control form-control-user" placeholder="Nomor Induk Kependudukan" required>
                    </div>
                    <label class="small"><b>Nama Lengkap</b><label><font color="red">&thinsp;*</font></label></label>
                    <div class="form-group">
                      <input type="text" name="nama" class="form-control form-control-user" placeholder=" Nama Lengkap" required>
                    </div>
                    <label class="small"><b>Username</b><label><font color="red">&thinsp;*</font></label></label>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
                    </div>
                    <label class="small"><b>Kata Sandi</b><label><font color="red">&thinsp;*</font></label></label>
                    <div class="form-group">
                      <input type="password" name="password" class="password form-control form-control-user" placeholder="Kata Sandi Baru" required>
                    </div>
                    <label class="small"><b>Nomor Telpon</b><label><font color="red">&thinsp;*</font></label></label>
                    <div class="form-group">
                      <input type="text" name="telp" class="form-control form-control-user" placeholder="Minimal 8-14 Angka" required>
                    </div>
                    <div class="text-left">
                      <a class="small"><input type="checkbox" required> Saya telah membaca dan menyetujui </a><a class="small" href="#"><b>Syarat dan Ketentuan Layanan</a></b></a><br><br>
                    </div>
                    <input type="submit" class="btn btn-success btn-user btn-block" value="DAFTAR">
                    <hr>
                    <a class="btn btn-secondary btn-user btn-block" href="index.php">KEMBALI</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
