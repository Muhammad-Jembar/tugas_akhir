<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header>
    <h3>Pendaftaran Siswa</h3>
</header>


<nav>
    <ul>
        <p><a href="form.php">Silakan Daftar</a></p>
        <p><a href="list-siswa.php">Pendaftar</a></p>
    </ul>
</nav>

<?php if(isset($_GET['status'])): ?>

<p>
    <?php if($_GET['status'] == 'sukses'){
        echo "pendaftaran berhasil!";
    } else {
        echo "pendaftaran gagal";
    }
    
    
    ?>
</p>

<?php endif; ?>
</body>
</html>