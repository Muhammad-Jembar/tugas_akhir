<?php

 $db = mysqli_connect("localhost", "root", "", "pendaftaran_siswa");



  function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $nama = mysqli_fetch_assoc($result) ) {
      $rows[] = $nama;
    }
    return $rows;
  
   }



   function tambah($data) {
    global $db;

    $nis = htmlspecialchars($data["nis"]); 
    $nama = htmlspecialchars($data["nama"]); 
    $jk = htmlspecialchars($data["jenis_kelamin"]); 
    $alamat = htmlspecialchars($data["alamat"]); 
 

    // query insert

    $query = "INSERT INTO tb_siswa 
               VALUES
               ('', '$nis', '$nama', '$jk', '$alamat')
          
    
    ";

     mysqli_query($db, $query);

     return mysqli_affected_rows($db);
 
    }
 
   function ubah($data) {
   global $db;
    
    $id = $data["id"];
    $nis = htmlspecialchars($data["nis"]); 
    $nama = htmlspecialchars($data["nama"]); 
    $jk = htmlspecialchars($data["jenis_kelamin"]); 
    $alamat = htmlspecialchars($data["alamat"]); 
 

    // query insert

    $query = " UPDATE tb_siswa SET 
               nis = '$nis',
               nama = '$nama',
               jenis_kelamin = '$jk',
               alamat = '$alamat'
               WHERE id = $id
    ";

     mysqli_query($db, $query);

     return mysqli_affected_rows($db);

   }
   
   function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM tb_siswa WHERE id = $id");

    return mysqli_affected_rows($db);
   }
    
   
 function cari($keyword) {
    $query = "SELECT * FROM tb_siswa 
         WHERE 
         nis LIKE '%$keyword%' OR
         nama LIKE '%$keyword%' OR
         jenis_kelamin LIKE '%$keyword%' OR 
         alamat LIKE '%$keyword%'   
    
    ";

    return query($query);
 }


  function registrasi($data) {
   global $db;

   $username   = strtolower(stripslashes($data["username"]));
   $password   =  mysqli_real_escape_string($db, $data["password"]);
   $password2  =  mysqli_real_escape_string($db, $data["password2"]);

  // cek email sudah ada atau belum
  $result =  mysqli_query($db, "SELECT username FROM tb_registrasi WHERE username = '$username'");


   if ( mysqli_fetch_assoc($result)) {
     echo 
     "<script>
     alert('email sudah terdaftar');
      </script>";
      return false;

   }

  // cek apakah password

  if( $password !== $password2 ) {
     echo "<script> 
        alert('data berhasil di tambahkan');
         </script>";

         return false;   
     
  }
   
   // enkripsi password

   $password = password_hash($password, PASSWORD_DEFAULT);


   // tambahkan data

   mysqli_query($db, "INSERT INTO tb_registrasi VALUES('', '$username', '$password')");

   return mysqli_affected_rows($db);

  }

?>