<?php
    include "koneksi.php";

    $id_kamus = $_GET["id_kamus"];

    $query = "DELETE FROM kamus where id_kamus = '$id_kamus'";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
        die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    
    }else {
        echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";

    } 


?>