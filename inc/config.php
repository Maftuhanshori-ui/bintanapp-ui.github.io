<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bintan";
//koneksi
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//cek
if (mysqli_connect_errno()) {
  echo 'Koneksi gagal :' . mysqli_connect_errno();
}
