<?php include "koneksi.php" ?>


<html>
<head>
<style>
div.img {
    border: 2px solid #ccc;
}


h2{
            text-transform: uppercase;
            color:white;
        }


div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 185px;
    height: 150px;
}

div.desc {
    padding: 5px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 18%;
    height: 10%;
}



.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

.image-column a img {
    position:relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}

</style>
</head>
<body>

<h2> Pilih Kamus  </h2>


<?php 
			
			include('koneksi.php');

				
 	if(isset($_POST['kata_cari'])) {
         $key=$_POST['kata_cari'];
					//$query = "SELECT * FROM kamus WHERE id_kamus LIKE '%$_GET['kata_cari']%' OR nama_kategori LIKE '%$_GET['kata_cari']%' OR nama LIKE '%$_GET['kata_cari']%'");
					$query = "SELECT * FROM kamus WHERE nama_kategori LIKE '%$_POST[kata_cari]%' OR nama LIKE '%$_POST[kata_cari]%'";
				
				}else {
                    $query = "SELECT * FROM kamus ORDER BY id_kamus";
                }
			
                $result = mysqli_query($koneksi, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }
 

            $no = 1;

            while ($row = mysqli_fetch_assoc($result)){

			?>
<div class="responsive">
  <div class="img">
       <img src="gambar/<?php echo $row ['gambar_kamus'];?>">
 
	<div class="desc"><font color="white"><?php echo $row ['nama_kategori'];?></font></div>
	<div class="desc"><font color="white" ><?php echo $row ['nama'];?></font></div>
    <div class="desc">Wacth</div>
    
  </div>
</div>

<?php }?>


</body>
</html>
