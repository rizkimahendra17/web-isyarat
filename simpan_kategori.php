<?php 
    include "koneksi.php";

    $nama_kategori  = $_POST['nama_kategori'];
    $keterangan = $_POST['keterangan'];
     
    $query = "INSERT INTO kategori (nama_kategori, keterangan) VALUES ('$nama_kategori', '$keterangan')";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
        die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    
    }else {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
    }

?>