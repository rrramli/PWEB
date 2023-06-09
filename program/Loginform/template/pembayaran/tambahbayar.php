<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Pembayaran IOM</title>
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
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="PNC.png" />
</head>

<body>
<h2 class="card-title">Tambah Data Pembayaran</h2>
	<div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                  <!-- <h1 class="card-title">Tambah Data Pembayaran</h1> -->
                  <form method="post" action="tambahaksi.php" class="forms-sample">
                    <div class="form-group row">
                      <label for=" " class="col-sm-3 col-form-label">Tanggal</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal" placeholder="yyyy-mm-dd">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" " class="col-sm-3 col-form-label">Nama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" " class="col-sm-3 col-form-label">Jumlah Nominal</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="nominal" placeholder="Rp0">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for=" " class="col-sm-3 col-form-label">Pembayaran Ke- </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="ke" placeholder=" ">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
					<a href="tabelbayar.php" class="btn btn-warning" >kembali</a>
                  </form>
                </div>
              </div>
            </div>
		</div>
	</div>
</body>
</html>