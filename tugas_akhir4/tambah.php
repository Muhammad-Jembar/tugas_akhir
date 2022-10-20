<?php

require 'functions.php';

// cek apakah submit sudah terkirim atau belum
if( isset($_POST["submit"]) ) {

if( tambah($_POST) > 0 ) {
   echo "
       <script>
           alert('data berhasil di tambahkan!');
           document.location.href = 'index.php';
        </script>
  ";
} else {
    echo "
    <script>
           alert('data gagal di tambahkan!');
           document.location.href = 'index.php';
        </script>
  ";
}

    
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <h1>tambah siswa</h1>
    <form action="" method="post">

         <p>
            <label for="nis">Nis :</label>
            <input type="text" name="nis" id="nis">
        </p>
        <p>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
        </p>
        <p>
            <label for="jurusan">Alamat :</label>
            <input type="text" name="jurusan" id="jurusan">
        </p>
        <p>
            <label for="email"> Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki">
            <input type="radio" name="jenis_kelamin" value="Perempuan">
        </p>
        <p>
            <button type="submit" name="submit">Tambah  Data!!!</button>
        </p>
    

    </form>
</body>
</html>