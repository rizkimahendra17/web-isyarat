<?php
    session_start();
    include "koneksi.php";
    if($_SESSION['status'] != 'sudah_login') {
        header("location:login.php?pesan=anda belum login! silahkan login dulu!");
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>
    <title> Halama Utama </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
        <div id="background">
            <header>
        <div id="header">
            <td><img src="foto/logo.png" width="100px" height="100px" id="imge"></td>
            
    <h3> Bank Kosa Kata Untuk </h3>
    <h3> Tuna Rungu Dan Tuna Wicara </h3>
      
        </div>
</header>

        <div id="content">
            <div id="menu">
        
    
                
    <ul>

    <?php	if(@$_SESSION['idadmin']){
			?>
			 	 	 	 
         <li><a href="?modul=utama">BERANDA</a></li>
         <li><a href="?modul=kamus">KAMUS</a></li>
         <li><a href="?modul=kategori">KATEGORI</a></li>
         <li><?php if(isset($_SESSION['idadmin'])){ ?><a href="?modul=logout">Logout</a><?php } else { ?><a href="?modul=loginadmin">Login</a><?php } ?></li>
	 
		
			 
		 
	<td colspan="4">
			<?php } else if (@$_SESSION['id_user'])  { ?> 

        <li>
		<form method="post" action="?modul=carikata" >
		<input type="text" name="kata_cari" size="16"/>
		<button type="submit">Cari</button>
	</form>
         </li>
         <li><a href="?modul=utama">BERANDA</a></li>
         <li><a href="?modul=daftar_kamus">KAMUS</a></li>
         <li><a href="?modul=daftar_kategori">KATEGORI</a></li>
         <li><a href="?modul=loginadmin">Login Admin</a></li>
         <li><a href="?modul=logout">LOGOUT</a></li>
        
         <?php } ?> 
    </ul>
    
</div>  
        <div id="kanan">
        <?php include "content.php"; ?>
        
        
       </div>
        </div>
        <div id="footer">
        <p> &#169; 2020 PRIMA ALDIFA   </p>
</div>
</div>
</body>
</html>
