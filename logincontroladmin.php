<?php
    session_start();

    include('koneksi.php');

    $ausername = $_POST['username'];
    $apassword = $_POST['password'];
    

    $aresult = mysqli_query($koneksi, "SELECT *FROM utama where username = '$ausername' and password = '$apassword'");

    $cek = mysqli_num_rows($aresult);

    if($cek > 0) {
        $adata = mysqli_fetch_assoc($aresult);

        $_SESSION['username'] = $ausername;
        $_SESSION['nama'] = $adata['nama'];
        $_SESSION['akses'] = 'akses';
        $_SESSION['idadmin'] = $adata['id_admin'];

        print"<script>alert('anda Login Sebagai Admin'); javascript:window.location='index.php';</script>";
    } else {
    print"<script>alert(' akses ditolak'); javascript:window.location='index.php';</script>";
    }
    
?>