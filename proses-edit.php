<?php

include("config.php");

// apakah tombol simpan sudah di tekan 
// menggunakan id
// kembali ke list-siswa.php
// kembali menggunakan header

if(isset($_POST['simpan'])){

    $id  = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk   = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // query dan sql

    $sql = "UPDATE tb_siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jk', alamat='$alamat' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ( $query ){
        header("Location: list-siswa.php");
    } else {
        die("coba lagi");
    }


} else {
   die("akses di larang");
}







?>