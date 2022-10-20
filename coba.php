<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
   
</head>
<body>

    <br>
    <h4>Menampilkan Data pada Tabel berdasarkan pilihan Combo Box di PHP</h4>

    <form action="" method="post">
  
      
        <?php
        $kata_kunci="";
        if (isset($_POST['keyword'])) {
            $kata_kunci=$_POST['keyword'];
        }
        ?>
        <input type="text" name="keyword" value="<?php echo $kata_kunci;?>"  required/>

        <input type="submit" class="btn btn-info" value="Pilih">
    
    </form>

    <table border="1" cellpadding="10" cellspacing="0">
        <br>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
           

        </tr>
        </thead>
        <?php

        include "config.php";
        if (isset($_POST['keyword'])) {
            $kata_kunci=trim($_POST['keyword']);
            $sql = "SELECT * FROM tb_siswa where nis like '%".$kata_kunci."%' or nama like '%".$kata_kunci."%' or alamat like '%".$kata_kunci."%' order by nik asc";

        } else {
            $sql = "SELECT * FROM tb_siswa order by nik asc";
            $query = mysqli_query($db, $sql);
            
          
   
        }

        
        while($siswa = mysqli_fetch_array( $query )){
   
    
            echo "<tr>";
      
            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nis']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
          
        
            echo "</tr>";
        } 



      ?>

        
    

      
    </table>
</div>

</body>
</html>