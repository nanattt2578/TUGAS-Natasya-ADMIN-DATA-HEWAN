<?php
include "page/header.php";
?>

<!--akhir header--> 

<!--Navbar-->
<?php
include 'page/navbar.php';
?>
<!--akhir navbar-->

<!--sidebar-->
<?php
include 'page/sidebar.php';
?>
<!--akhir sidebar-->

<body class="hold-transition sidebar-mini">
    <!--site wrapper-->
    <div class="wrapper">
        <!--navbar-->

        <!--/.navbar-->

          <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!--Main content -->
    <section class="content">

          <!-- Default box -->
      <div class="card">
        <div class="card-header">
          


           <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
              </div>
              
              <?php include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM nanatt6 WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Edit Data Hewan</h2>

<form action="" method="post">
    <div class="mb-3">
        <label>Nama Hewan</label>
        <input type="text" name="nama_hewan" class="form-control" value="<?= $d['nama_hewan'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Jenis Hewan</label>
        <input type="text" name="jenis_hewan" class="form-control" value="<?= $d['jenis_hewan'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Asal</label>
        <input type="text" name="asal" class="form-control" value="<?= $d['asal'] ?>" required>
    </div>

    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" value="<?= $d['jumlah'] ?>" required>
    </div>

    <button type="submit" name="update" class="btn btn-warning">Update</button>
    <a href="hewan.php" class="btn btn-secondary">Kembali</a>
</form>

</body>
</html>

<?php
if (isset($_POST['update'])) {

    $nama = $_POST['nama_hewan'];
    $jenis = $_POST['jenis_hewan'];
    $asal = $_POST['asal'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($koneksi, 
        "UPDATE nanatt6 SET 
            nama_hewan='$nama',
            jenis_hewan='$jenis',
            asal='$asal',
            jumlah='$jumlah'
        WHERE id='$id'"
    );

    if ($query) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='hewan.php';</script>";
    } else {
        echo "<script>alert('Gagal update data');</script>";
    }
}
?>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
      
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


    !-- <Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
