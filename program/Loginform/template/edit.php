<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Informasi Pembayaran IOM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where nim='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

	<div class="col-md-6 grid-margin stretch-card">
        <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data Mahasiswa</h4>
                  <form method="post" action="update.php" class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIM</label>
                      <div class="col-sm-9">
                        <input type="text" name="nim" class="form-control" value="<?php echo $d['nim']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Program Studi</label>
                      <div class="col-sm-9">
                        <select name="program_studi" class="form-control" value="<?php echo $d['program_studi']; ?>">
						<option value="D-3 Teknik Informatika">D-3 Teknik Informatika</option>
					<option value="D-3 Teknik Mesin">D-3 Teknik Mesin</option>
					<option value="D-3 Teknik Listrik">D-3 Teknik Listrik</option>
					<option value="D-3 Teknik Elektronika">D-3 Teknik Elektronika</option>
					<option value="D-4 Teknik Pengendalian Pencemaran Lingkungan">D-4 Teknik Pengendalian Pencemaran Lingkungan</option>
					<option value="D-4 Pengembangan Produk Agroindustri">D-4 Pengembangan Produk Agroindustri</option>
					<option value="D-4 Rekayasa Keamanan Siber">D-4 Rekayasa Keamanan Siber</option>
					<option value="D-4 Akuntansi Lembaga Keuangan Syariah">D-4 Akuntansi Lembaga Keuangan Syariah</option>
					<option value="D-4 Teknologi Rekayasa Multimedia">D-4 Teknologi Rekayasa Multimedia</option>
					<option value="D-4 Teknologi Rekayasa Mekatronika">D-4 Teknologi Rekayasa Mekatronika</option>
					</select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" " class="col-sm-3 col-form-label">Semester</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="semester" value="<?php echo $d['semester']; ?>">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                  </form>
                </div>
            </div>
        </div>
	</div>
	<?php 
		}
	?>
 
</body>
</html>