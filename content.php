<?php
if(@$_GET['modul']=="" || @$_GET['modul']=="home" ){
}else if($_GET['modul']=="logout"){
        include "logout.php";	
}else if($_GET['modul']=="login"){
    include "login.php";	
}else if($_GET['modul']=="loginadmin"){
    include "loginadmin.php";	
}else if($_GET['modul']=="registrasi"){
    include "registrasi.php";	
}else if($_GET['modul']=="kategori"){
    include "kategori.php";	
}else if($_GET['modul']=="tambah_kategori"){
    include "tambah_kategori.php";	
}else if($_GET['modul']=="edit_kategori"){
    include "edit_kategori.php";	
}else if($_GET['modul']=="kamus"){
    include "kamus.php";	
}else if($_GET['modul']=="tambah_kamus"){
    include "tambah_kamus.php";	
}else if($_GET['modul']=="edit_kamus"){
    include "edit_kamus.php";	
}else if($_GET['modul']=="hapus_kamus"){
    include "hapus_kamus.php";	
}else if($_GET['modul']=="daftar_kamus"){
    include "daftar_kamus.php";	
}else if($_GET['modul']=="utama"){
    include "home.php";	
}else if($_GET['modul']=="daftar_kategori"){
    include "daftar_kategori.php";	
}else if($_GET['modul']=="carikata"){
    include "cari.php";	
}
?>