<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nik           = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan       = $_POST['jabatan'];
$jam_masuk = date("H:i:s");
$jam_keluar = NULL;

//query insert data ke dalam database
$query = "INSERT INTO tb_absen VALUES ('$nik', '$nama', '$jabatan', '$jam_masuk', '$jam_keluar')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
$result = mysqli_query($connection, $query);
    //redirect ke halaman index.php 
    header("location: index.php");

?>