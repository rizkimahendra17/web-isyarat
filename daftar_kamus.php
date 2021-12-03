<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head> 

<link rel="stylesheet" href="css/bootstrap.css" type="text/css"> 
 
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
    font-weight: bold;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 18%;
    height: 10%;
    margin-bottom: 200px;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
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

#a{
            background-color: white;
            color: black;
    
        }


</style>
</head>
<body>

<center><h2> Gambar Kamus </h2> </center>


<?php
                $query = "SELECT * FROM kamus ORDER BY id_kamus asc";
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
    <div class="desc"><a id='edit_data' data-toggle='modal' data-target='#modal_kamus' href="?modul=daftar_kamus&id=<?php echo $row['id_kamus'];?>">Watch</div> </a>
     

  </div>
</div>
<?php 
$no++;
}?>


<div class="modal fade" id="modal_kamus" tabindex="-1" role="dialog" aria-labelledby="provinsi" aria-hidden="true"></div>


<?php
if(@$_GET['id']!="") { 
include"koneksi.php";
	$id = $_GET['id'];
	$sql = "select * from kamus where id_kamus='".$id."'";
	$result = mysqli_query($koneksi,$sql);	
	
	while($row=mysqli_fetch_assoc($result)){
		$gambar=$row['gambar_kamus'];	
		$vidio=$row['vidio_kamus'];	
		$nama=$row['nama'];	
	}
?>

<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
                  <!--  <h4 class="modal-title">Video Isyarat   </h4> -->
                </div>
                <div class="modal-body">
                    <div class="row">
                    	<div class="col-xs-12">
                        	<div class="form-group">
                                 <video width="550px" class="" height="450px" 
								 style="margin-top: -200px;" controls>
										<source src="vidio/<?=$vidio?>" type="video/mp4">
								</video>
 
                            </div>
                        </div>
                    </div>
                </div>
             </div>
</div>
<?php }?>

<!-- js untuk jquery -->
<script src="js/jquery-1.11.2.min.js"></script>
	<!-- js untuk bootstrap -->
	<script src="js/bootstrap.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('a#edit_data').click(function(){
				var url = $(this).attr('href');
				$.ajax({
					url : url,
					success:function(response){
						$('#modal_kamus').html(response);
					}
				});
			});
			
		});
	</script>
 
 
</body>
</html>
