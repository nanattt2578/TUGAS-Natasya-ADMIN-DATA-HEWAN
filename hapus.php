<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM nanatt6 WHERE id='$id'");

if ($query) {
    echo "<script>alert('Data berhasil dihapus'); window.location='hewan.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data'); window.location='hewan.php';</script>";
}
?>
