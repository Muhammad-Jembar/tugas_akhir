<?php 
 
 require 'function.php';


 if(isset($_POST["submit"]) ) {


    if( registrasi($_POST)  > 0 ) {
      
        echo "
        <script>
          alert('user berhasil di tambhakan');    
        </script>  
        ";
    
     } else {
     
        echo mysqli_error($db);

    }

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
            height: 500px;
            width: 400px;
            margin: auto;
            margin-top: 50px;
            background-color: white;
            border-radius: 20px;
        }
     
        h1 {
            font-size: 40px;
            font-weight: bold;
            font-family: monospace;
        }

        input {
            width: 250px;
            height: 40px;
            margin-left: 20px;
            border-radius: 10px;
            border: none;
            border: 2px solid black;
        }

        button {
            height: 40px;
            width: 255px;
            border: none;
            color: white;
            background-color: blue;
            border-radius: 20px;
            margin-left: 25px;
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
    
     <h1>REGISTRASI</h1>

   <p>
    <label for="username">Username: </label>
    <br>
    <input type="text" name="username" placeholder="Masukkan Username" autofocus autocomplete="off">
   </p>
    
   <p>
   <label for="password">Password: </label>
   <br>
   <input type="password" name="password" placeholder="Masukkan Password">
   </p>
    
   <p>
    <label for="password2">Konfirmasi Password</label>
    <br>
    <input type="password" name="password2" placeholder="Konfirmasi Password">
   </p>
   
    
   <p>
    <button type="submit" name="submit">Registrasi</button>
   </p>

   </form>

    </div>

  
</body>
</html>