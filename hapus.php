<?php 

 require 'function.php';

 

// mengambil id dari list-siswa.php

 $id = $_GET['id'];

 if (hapus($id) > 0 ) {

    echo "
    <script>
      alert('data telah di hapus');
      document.location.href = 'list-siswa.php'
    </script>  
    ";

 } else {
 
    echo "
    <script>
      alert('data telah di hapus');
      document.location.href = 'list-siswa.php'
    </script>   
    ";
    

 }
 
 // query dan sql


 // kembali ke halaman list-siswa.php
 // kembali menggunakan header

  
 


?>