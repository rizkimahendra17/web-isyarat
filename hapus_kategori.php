<?php
    include "koneksi.php";

    $id_kategori = $_GET['id_kategori'];

    $query = "DELETE FROM kategori where id_kategori = '$id_kategori'";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
        die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    
    }else {
        echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";

    } 


?>