<?php 
    include "koneksi.php";

    $id_kategori  = $_POST['id_kategori'];
    $nama_kategori  = $_POST['nama_kategori'];
    $keterangan = $_POST['keterangan'];
    
    
    $query = "UPDATE kategori SET nama_kategori = '$nama_kategori', keterangan = '$keterangan'";
    $query .= "WHERE id_kategori = '$id_kategori'";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
        die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    
    }else {
        echo "<script>alert('Data berhasil diubah!');window.location='index.php';</script>";

    } 
