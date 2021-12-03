<?php
	include"koneksi.php";
	$id_provinsi = $_GET['id'];
	$sql = "select * from data_provinsi where id_provinsi='".$id_provinsi."'";
	$result = mysqli_query($conn,$sql);	
	
	while($row=mysqli_fetch_assoc($result)){
		$nama_provinsi=$row['nama_provinsi'];	
	}
?>

<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Detail Provinsi</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    	<div class="col-xs-12">
                        	<div class="form-group">
                            	<label class="control-label">Nama Provinsi</label>
                                <input type="text" name="nama_provinsi" id="nama_provinsi" class="form-control" value="<?=$nama_provinsi?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Ok</button>
                </div>
            </div>
</div>