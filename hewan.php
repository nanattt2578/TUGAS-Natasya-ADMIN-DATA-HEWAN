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
        <?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-3">
        <a href="tambah.php" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>hewan</th>
                <th>Jenis</th>
                <th>Asal</th>
                <th>Jumlah</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
        <?php 
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM nanatt6");
        while($d = mysqli_fetch_array($data)) {             echo "<tr>
                <td>{$no}</td>
                <td>{$d['nama_hewan']}</td>
                <td>{$d['jenis_hewan']}</td>
                <td>{$d['asal']}</td>
                <td>{$d['jumlah']}</td>

                <td>
  <a href='edit.php?id=$d[id]' class='btn btn-warning btn-sm'>Edit</a>
                   <a href='hapus.php?id=$d[id]'class='btn btn-danger btn-sm' onclick=\"return confirm('Hapus data?')\">Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>
</tbody>
</table>
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