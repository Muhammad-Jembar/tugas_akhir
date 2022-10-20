<?php 
require 'functions.php';
$siswa = query("SELECT * FROM tb_siswa");


// tombol cari di tekan

if ( isset($_POST["cari"]) ) {
    $siswa = cari($_POST['keyword'];)
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <h1>Daftar Siswa</h1>
 
  <a href="tambah.php">Tambah Data[+]</a>

<br>
<br>

<form action="" method="post">


 <input type="text" name="keyword" size= "30" autofocus placeholder="masukan data pencarian!!" autocomplete="off">
  <button type="submit" name="cari">Cari</button>


</form>

<br>


<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>id</th>
    <th>Nis</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Tindakan</th>
</tr>

<?php foreach($siswa as $nama) : ?>
<tr>
    <td><?= $nama["nis"]?></td>
    <td><?= $nama["nama"]?></td>
    <td><?= $nama["jenis_kelamin"]?></td>
    <td><?= $nama["alamat"]?></td>
    <td>
        <a href="ubah.php?id= <?= $nama["id"]; ?>"></a>
        <a href="hapus.php?id= <?= $nama["id"]; ?>"></a>
    </td>
</tr>

<?php endforeach; ?>
</table>



</body>
</html>