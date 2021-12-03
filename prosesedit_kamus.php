<?php
include "koneksi.php";

$id_kamus = $_POST['id_kamus'];
$nama_kategori  = $_POST['nama_kategori'];
$nama  = $_POST['nama'];
$keterangan = $_POST['keterangan'];
  $gambar_kamus = $_FILES['gambar_kamus']['name'];
  $vidio_kamus = $_FILES['vidio_kamus']['name'];
  //cek dulu jika merubah gambar kamus jalankan coding ini
  if($gambar_kamus != "" && $vidio_kamus != "" ) {
    $file_name_g =@$_FILES['gambar_kamus']['name'];
    $file_tmp_g =@$_FILES['gambar_kamus']['tmp_name'];
    move_uploaded_file($file_tmp_g,"gambar/".$file_name_g);

  
    $file_name =@$_FILES['vidio_kamus']['name'];
    $file_tmp =@$_FILES['vidio_kamus']['tmp_name'];
    move_uploaded_file($file_tmp,"vidio/".$file_name);




                   $query  = "UPDATE kamus SET nama_kategori = '$nama_kategori', nama = '$nama', keterangan = '$keterangan', gambar_kamus = '$file_name_g', vidio_kamus = '$file_name'";
                   $result = mysqli_query($koneksi, $query);
            
                   if(!$result){
                       die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                   
                   }else {
                       echo "<script>alert('Data berhasil diubah!');window.location='index.php';</script>";
                   }
       

    } else {
      // jalankan query UPDATE berdasarkan ID yang kamus kita edit
      $query  = "UPDATE kamus SET nama_kategori = '$nama_kategori', nama = '$nama', keterangan = '$keterangan'";
                   $result = mysqli_query($koneksi, $query);
            
                   if(!$result){
                       die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                   
                   }else {
                       echo "<script>alert('Data berhasil diUbah!');window.location='index.php';</script>";
                   }
       
    }