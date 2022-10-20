<?php 


// menggunakan session_start();


session_start();

if( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

 require 'function.php';

 if(isset($_POST["daftar"]) ) {


   // cari tombol

   if (tambah($_POST) > 0 ) {
   
      echo "
      <script>
        alert('data berhasil di tambahkan');
        document.location.href = 'list-siswa.php'
      </script>  
      ";
  
   } else {
   
      echo "
      <script>
        alert('data gagal');
        document.location.href = 'list-siswa.php'
      </script>   
      ";
      
  
   }


   }
  

 

  // query sql

 // mysqli_fetch_assoc
 // penggulangan array dari list-siswa.php

 // ambil id dari list-siswa.php

 


// if(isset($_POST['cari'])){
  
//   $query = cari($_POST['keyword']);
// }    //else {
     //$query = mysql_query("SEL

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>  
   body {
      display: flex;
      align-items: center;
      text-align: center;
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,9,121,1) 35%, rgba(0,212,255,1) 100%);
   }
    
    .wrapper {
     height: 520px;
     width: 450px;
     margin: auto;
     margin-top: 50px;
     background-color: white;
     border-radius: 20px;
     }


     .tampilan {
      width: 200px;
      height: 30px;
      margin-left: 15px;
      border: none;
      border: 1px solid black;
      border-radius: 10px;
   
    

     }

     .tampilan2 {
      width: 200px;
      height: 30px;
      border: none;
      border: 1px solid black;
      border-radius: 10px;
    
     }
     
   .tampilan3 {
    font-size: 20px;
    font-weight: bold;
    font-family: monospace;
   }

     input::placeholder{
      
     }

     button {
      color: black;
     }
     

   h1 {
      font-size: 30px;
      text-align: center;
      font-weight: bold;
      font-family: monospace;
   }
   
   h2 {
      font-size: 20px;
   }
 
  a {
   text-decoration: none;
  }

   .tombol {
      height: 30px;
      width: 100px;
      border: none;
      color: white;
      background-color: blue;
      border-radius: 20px;
      text-align: center;
   }

   .tombol:hover {
      background-color: blue;
      opacity: 0.5;
   }
    </style>
</head>
<body>
    
   


  <div class="wrapper">
   
   <h1>PENDAFTARAN SISWA</h1>
   <p class="tampilan3">Silakan Daftar</p>
   <form action="" method="POST">

   

   <p>
   <label for="nis">Nis: </label>
   <input type="text" class="tampilan" name="nis" placeholder="masukan nis lengkap" required autofocus autocomplete="off">
   </p>

   <p>
    <label for="nama">Nama: </label>
    <input type="text" class="tampilan2" name="nama" placeholder="masukan nama lengkap" required autofocus autocomplete="off">
   </p>
 
   <p>
    <label for="jenis_kelamin">Jenis Kelamin: </label>
   <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki laki</label>
   <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
   </p>

   <p>
   <label for="alamat">Alamat: </label>
   <textarea name="alamat" id="" cols="20" rows="10" placeholder="masukan alamat lengkap" required autofocus autocomplete="off"></textarea>
   </p>

   <p>
    <button type="submit" value="Daftar" name="daftar" class="tombol">Daftar</button>
   </p>



   </form>
   <a href="list-siswa.php">kembali</a>

</div>


   
  

  


</body>
</html>