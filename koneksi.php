<?php 

 $server = "localhost";
 $user = "root";
 $password = " ";
 $nama_database = "nanatt6";

 $koneksi = mysqli_connect("localhost","root","","nanatt6");

 if ( !$koneksi){
      die("Gagal terhubung dengan database :" .mysqli_connect_error());
 }

?>