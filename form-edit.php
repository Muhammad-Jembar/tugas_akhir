<?php


  // menggunakan session_start();

   
 session_start();

 if( !isset($_SESSION["login"])) {
   header("Location: login.php");
   exit;
 }
    
    require 'function.php';

    // ambil id dari list

     $id = $_GET['id'];


    $siswa = query("SELECT * FROM tb_siswa WHERE id = $id")[0];

    // tombol simpan 

    if (isset($_POST["simpan"]) ) {

    
      if ( ubah($_POST) > 0 ) {
 

        echo "
        <script>
          alert('data berhasil di ubah');
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

// menggunakan $_GET 

// if( !isset($_GET['id'])) {
   
//     // kembali ke list-siswa.php
//     // kembali menggunakan header
//    header("Location: list-siswa.php");
// }
    
//    // query sql

//   // mysqli_fetch_assoc
//   // penggulangan array dari list-siswa.php

//   // ambil id dari list-siswa.php

//   $id = $_GET['id'];

//   $sql = "SELECT * FROM tb_siswa WHERE id=$id";
//   $query = mysqli_query($db, $sql);
//   $nama = mysqli_fetch_assoc($query);




  // jika data < 1
  // menggunakan mysqli_num_rows
  // kembali ke list-siswa.php
  // tampilkan pesan/die


  // menggunakan operator ternary
  // untuk input type=radio (cheaked) 
  // checked dan selected

   

  // hidden = menyimpan id di list-siswa.php
  // yang akan di update




  


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
     height: 450px;
     width: 450px;
     margin: auto;
     margin-top: 50px;
     background-color: white;
     border-radius: 20px;
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

     input::placeholder {
      text-align: center;
     }

     h2 {
      font-family: monospace;
      font-size: 20px;
      font-weight: bold;
      line-height: 20px;
     }

    </style>


</head>
<body>

 
<div class="wrapper">

<form action="" method="POST">

 <h2>SILAKAN EDIT DATA</h2>


  <input type="hidden" name="id" value="<?php echo $siswa["id"]; ?>" />

 <p>
 <label for="nis">Nis: </label>
 <input type="text" class="tampilan" name="nis" placeholder="ubah nis" value="<?php echo $siswa["nis"]; ?>" />
</p>


<p>
 <label for="nama">Nama: </label>
 <input type="text" class="tampilan2" name="nama" placeholder="ubah nis" value="<?php echo $siswa["nama"]; ?>" />

</p>



<p>
 <label for="jenis_kelamin">Jenis kelamin: </label>
 <?php $jk = $siswa["jenis_kelamin"]; ?>
 <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>laki-laki</label>
 <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>Perempuan</label>
</p>

<p>
 <label for="alamat">Alamat: </label>
<textarea name="alamat" id="" cols="20" rows="10"><?php echo $siswa["alamat"]; ?></textarea>
</p>

<p>
    <input type="submit" value="Simpan" name="simpan" class="tombol" />
</p>



</form>
</div>
 
    
</body>
</html>