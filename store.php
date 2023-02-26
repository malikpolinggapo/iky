<?php
include_once 'koneksi.php';
$nama =$_POST['nama'];
$nim = $_POST['nim'];
mysqli_query($koneksi, "INSERT INTO mhsw (nama, nim) VALUES ('$nama','$nim')" );

header('location: homee.php');