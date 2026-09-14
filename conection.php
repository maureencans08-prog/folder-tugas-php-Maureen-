<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "biodata_siswa_db";

$koneksi = mysqli_connect($host,$username,$password,$database);

if(!$koneksi){
    die("Koneksi tidak terhubung" . mysqli_connect_error());
}
echo "Koneksi sukses";

?>