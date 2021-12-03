<?php 
    include "koneksi.php";

    $nama_kategori  = $_POST['nama_kategori'];
    $nama  = $_POST['nama'];   
    $keterangan = $_POST['keterangan'];
    $gambar_kamus = $_FILES['gambar_kamus']['name'];
    $vidio_kamus = $_FILES['vidio_kamus']['name'];



     if($gambar_kamus != "" && $vidio_kamus != "" ) {
/*
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar_kamus);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar_kamus']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar_kamus;
*/
        $file_name_g =@$_FILES['gambar_kamus']['name'];
        $file_tmp_g =@$_FILES['gambar_kamus']['tmp_name'];
        move_uploaded_file($file_tmp_g,"gambar/".$file_name_g);

      
        $file_name =@$_FILES['vidio_kamus']['name'];
        $file_tmp =@$_FILES['vidio_kamus']['tmp_name'];
        move_uploaded_file($file_tmp,"vidio/".$file_name);


       // if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
         //   move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);


            $query = "INSERT INTO kamus (nama_kategori, nama, keterangan, gambar_kamus,vidio_kamus) VALUES ('$nama_kategori', '$nama', '$keterangan', '$file_name_g','$file_name')";
            $result = mysqli_query($koneksi, $query);
            
            if(!$result){
                die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            
            }else {
                echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
            }

     //   }else {
       //     echo"<script>alert('Ekstensi gambar hanya bisa jpg dan png');window.location='tambah_kamus.php';</script>";
   
 //   }

  }else {
    $query = "INSERT INTO kamus (nama_kategori, nama, keterangan) VALUES ('$nama_kategori', '$nama', '$keterangan')";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
        die("Query Error : " .mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    
    }else {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
    }

  }

?>