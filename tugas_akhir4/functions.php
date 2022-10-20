<?php

$conn = mysqli_connect("localhost", "root", "" , "siswa") ;
 
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [] ;
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
} 

function tambah($data) {
    global $conn;

    $nis = $data["nis"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $jk = $data["jenis_kelamin"];
   
 
    $query = "INSERT INTO tb_siswa
    VALUES
    ('$nis', '$nama', '$alamat', '$jk')
    ";

mysqli_query ($conn, $query);
 
return mysqli_affected_rows($conn);

}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}