<?php

require_once('conection.php');

$queryData = "SELECT * FROM tb_biodata";

$hasil = mysqli_query($koneksi, $queryData);

if ($hasil->num_rows>0){
    while($rowdata = $hasil->fetch_assoc()){
        echo "nama: ".$rowdata["Nama"]."<br/>";
    }
}