<?php

//   include("config.php");
  
//  function query($query) {
//   global $db;
//   $result = mysqli_query($db, $query);
//   $rows = [];
 while ( $row = mysqli_fetch_assoc($result) ) {
//     $rows[] = $row;
//   }
//   // kembali return
//   return $rows;

// }



  // function cari($keyword) {
  //   $query = "SELECT * FROM tb_siswa WHERE
  //            nama LIKE '%$keyword%' OR 
    
    
  //   ";

  //   return query($query);
  // }


  // mengambil keyword dari list-siswa.php

  // if( !isset($_POST['keyword'])) {
  
  //   header("Location: list-siswa.php");
    

  // }


    // mengambil keyword

     // echo "<tr>";
       
        // echo "<td>".$siswa['id']."</td>";
        // echo "<td>".$siswa['nis']."</td>";
        // echo "<td>".$siswa['nama']."</td>";
        // echo "<td>".$siswa['jenis_kelamin']."</td>";
        // echo "<td>".$siswa['alamat']."</td>";
       

         
        // echo "<td>";
        // echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
        // echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
        // echo "</td>";

        // echo "</tr>";
 
   
    // $sql = "SELECT * FROM tb_siswa WHERE nama LIKE '%".$keyword."%";
    // $query = mysqli_query($db, $sql);
    // $siswa = mysqli_fetch_assoc($query);

  
 
   // query dan sql

   //$sql = "SELECT * FROM tb_siswa WHERE nama LIKE '%".$keyword."%";
   //$query = mysqli_query($db, $sql);
   //$siswa = mysqli_fetch_assoc($query);

   // kembali ke halaman list-siswa.php
   // kembali menggunakan header

    

 




  // if( isset($_POST['cari'])) {

     // $nis    =  $_POST['nis'];
     // $nama   =  $_POST['nama'];
    // $jk     =  $_POST['jenis_kelamin'];
    // $alamat =  $_POST['alamat'];
    // $query = $_POST['keyword'];
     
   // header('Location: list-siswa.php');
  

   //function cari($keyword) {
      // menngguanakan mysqli_fecth_assoc
     // $sql = "SELECT * FROM tb_siswa WHERE nama = '$keyword'";
     // $query = mysqli_query($db, $sql);
     // $siswa = mysqli_fecth_assoc($query);
     // return $siswa($sql);
   
  

    // sql query 
    // menggunakan mysqli_fecth assoc
    // ambil id dari list-siswa.php
    // nis LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' OR alamat LIKE '%$keyword%'"

   

  //  $sql = "SELECT * FROM tb_siswa WHERE nis LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR jenis_kelamin LIKE '%$keyword%' OR alamat LIKE '%$keyword%'";
   // $query = mysqli_query($db, $sql);
   // $siswa = mysqli_fetch_assoc($query);
   
    // kembali ke halaman list-siswa.php
    // kembali menggunakan header
    // mysqli_num_rows

    // if (mysqli_num_rows( $query ) < 1 ) {
        // die("data gagal di temukan!");
    
    
   
    // if( $siswa ){
        // kembali ke halaman list-siswa.php
      //  header("Location: list-siswa.php");
    // } else {
    //    die("data gagal di temukan!");
    // }
     
      


   // } else {
    //    die("gagal di temukan");
  //  }
  

?>