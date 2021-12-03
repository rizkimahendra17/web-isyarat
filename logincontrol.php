<?php
    session_start();

    include('koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $result = mysqli_query($koneksi, "SELECT *FROM user where username = '$username' and password = '$password'");

    $cek = mysqli_num_rows($result);

    if($cek > 0) {
        $data = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['status'] = 'sudah_login';
        $_SESSION['id_user'] = $data['id_user'];

        print"<script>alert('anda Login Sebagai Pengguna'); javascript:window.location='index.php';</script>";
    } else {
    print"<script>alert(' akses ditolak'); javascript:window.location='index.php';</script>";
    }
    
?>