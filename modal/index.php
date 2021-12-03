<html>
<head>
	<!-- CSS untuk bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css"> 

</head>
<body>

<?php
	include"koneksi.php";
	
	$sql = "select * from data_provinsi";
	$result = mysqli_query($conn,$sql);	
?>
<div class="container">
	<table class="table table-bordered">
    <thead>
    <tr>
    	<th>Nama Provinsi</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        <?php
                //tampilkan data provinsi pada select provinsi
                while($row=mysqli_fetch_assoc($result)){
					
                    echo"<tr><td>".$row['nama_provinsi']."</td><td><a id='edit_data' data-toggle='modal' data-target='#modal_provinsi' href='modal_detail.php?id=".$row['id_provinsi']."'>Detail</a></td></tr>";
					
                }
        ?>
    </tbody>
    </table>
 </div>
 
 <div class="modal fade" id="modal_provinsi" tabindex="-1" role="dialog" aria-labelledby="provinsi" aria-hidden="true"></div>

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
						$('#modal_provinsi').html(response);
					}
				});
			});
			
		});
	</script>
</body>
</html>
