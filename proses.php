<?php 

include("config.php");


// tombol apakah sudah di tekan
   if(isset($_POST['daftar'])) {
    
    //masukan variabel dari form
    $nis    = $_POST['nis'];
    $nama   = $_POST['nama'];
    $jk     = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    //query dan sql 

    $sql = "INSERT INTO tb_siswa (nis, nama, jenis_kelamin, alamat) VALUE ('$nis', '$nama', '$jk', '$alamat')";
    $query = mysqli_query($db, $sql);

     // kembali ke halaman index.php

     if( $query ){
         // kembali ke index.php menggunakan header
         header('Location: index.php?status=sukses');
     } else {
         header('Location: index.php?status=gagal');
     }


    } else {
       die("akses di larang");
    }



?>
