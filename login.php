<?php 
   
  // menggunakan sesseion_start();
  session_start();  

  require 'function.php';

 if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username id
   $result = mysqli_query($db, "SELECT username FROM tb_registrasi WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }
 }
  

//    if(isset($_COOKIE['login']) ) {
//     if($_COOKIE['login'] == 'true') {
//         $_SESSION['login' = true];
//     }
//    }



  if(isset($_SESSION["login"]) ) {
   header("Location: list-siswa.php");
   exit;
  }

  

  // tombol sudah di tekan
   
   if(isset($_POST["submit"])) {

    
    $username = $_POST["username"];
    $password = $_POST["password"];


   $result = mysqli_query($db, "SELECT * FROM tb_registrasi WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1 ) {

        // cek password
        
        // cek menggunakan mysqli_fetch_assoc
       $row = mysqli_fetch_assoc($result);
       if( password_verify($password, $row["password"]) ) {

         // set session 
          $_SESSION["login"] = true;

        // cek remember me

        if(isset($_POST["remember"])) {
           // buat cookie 
           setcookie('id', $row['id'], time()+ 60);
           setcookie('key', hash('sha256', $row['username'], time()+ 60));
        }


          header("Location: list-siswa.php");
          exit;
       }
    }
    
    $error = true;

   }



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
  
        label {
            display: block;
            margin-left: 20px;
            margin-top: 20px;
        }

        input::placeholder {
       
        }
      
        .wrapper {
            width: 400px;
            margin: auto;
            margin-top: 50px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 3px 3px 0px rgba(0,0,0,0.5);
            transition: all 0.3 ease;
        }

        input {
            width: 250px;
            height: 40px;
            margin-left: 20px;
            border-radius: 10px;
            border: none;
            border: 2px solid black;
        }
        
        .tampilan {
            width: 30px;
            height: 20px;
            margin-left: -160px;
            margin-top: 20px;
        }
        
        .tampilan2 {
            margin-top: -23px;
            margin-left: -5px;
            margin-bottom: 20px;
        }
        
        h1 {
            font-size: 50px;
            font-weight: bold;
            font-family: monospace;
        }

      a {
        text-decoration: none;
      }
        button {
            height: 40px;
            width: 255px;
            border: none;
            color: white;
            background-color: blue;
            border-radius: 20px;
            margin-left: 25px;
            margin-bottom: 10px;
        }

     button:hover {
      background-color: blue;
      opacity: 0.5;
    }
    </style>
</head>
<body>
    
   

   
  

   <div class="wrapper">
   <form action="" method="POST">

    <h1>LOGIN</h1>

    <?php if( isset($error)) : ?>
     <p style="color: red; font-weight: bold;">Username / Password salah</p>
    <?php endif; ?>


    <p>
        <label for="username">Username</label>
        <br>
        <input type="text" name="username" placeholder="Masukkan Username" required autofocus autocomplete="off">
    </p>
     
    <p>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" placeholder="Masukkan Password">
    </p>
     <p class="tampilan3">
        <input type="checkbox" name="remember" class="tampilan">
        <label for="remember" class="tampilan2">Remember Me</label>
     </p>
     <p>Belum punya Akun? <a href="registrasi.php">Daftar</a></p>
     <p>
        <button type="submit" name="submit">Login</button>
     </p>
     
   </form>
  </div>
   
</body>
</html>