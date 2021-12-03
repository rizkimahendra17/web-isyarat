<?php 
    include "koneksi.php";

    $nama  = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO user (nama, username, password) VALUES ('$nama', '$username', '$password')";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
        die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    
    }else {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
    }

?>