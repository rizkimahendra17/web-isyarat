<?php include "koneksi.php"; 

    if(isset($_GET['id_kamus'])){
        $id_kamus = $_GET['id_kamus'];
        $query = "SELECT * FROM kamus where id_kamus = '$id_kamus'";
        $result = mysqli_query($koneksi, $query);
        if(!$result) {
            die("Query Erorr :".mysqli_errno($koneksi). " - ".mysqli_error($koneksi));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script>alert('Data tidak ditemukan pada tabel');window.location='index.php';</script>";
        }

    }else {
        echo "<script>alert('Masukan ID yang ingin di edit');window.location='index.php';</script>";
    }

?>

<html>
<head>
    <title> Edit kamus </title>
    <style type="text/css">
            *{
                font-family: "Trebuchet MS"
            }

            h2{
                text-transform: uppercase;
                color: white;
            }
            .base {
                width: 400px;
                padding: 20px;
                margin-left: auto;
                margin-right: auto;
                background-color: #ededed;
            }

           label {
                margin-top : 10px;
                float: left;
                color: salmon;
                width: 100%;
                text-align: left;
               
            }

          input{
              padding: 6px;
              width: 100%;
              box-sizing: border-box;
              background-color: #f8f8f8;
              border: 2px solid #ccc;
              outline-color: salmon;
          }
          

          button{
              background-color: salmon;
              color: #fff;
              padding: 10px;
              font-size: 12px;
              border: 0;
              margin-top: 20px;
          }

          #a{
              background-color: black;
              color: #fff;
              padding: 10px;
              font-size: 12px;
              border: 0;
              margin-top: 20px;
          }

        #select{
              padding: 6px;
              width: 100%;
              box-sizing: border-box;
              background-color: #f8f8f8;
              border: 2px solid #ccc;
              outline-color: salmon;
          }
            

    </style>
</head>
<body>
    <center><h2> Edit Kategori <?php echo $data['nama_kategori']; ?></h2></center>
    <form method="POST" action="prosesedit_kamus.php"  enctype="multipart/form-data">
    
    <section class="base">
    <input name="id_kamus" value="<?php echo $data['id_kamus']; ?>"  hidden />
<div>
    <label id="label">  Nama Kategori </label>
    <select  id="select" name="nama_kategori" value="<?php echo $data['nama_kategori'] ?>">
  
	<?php
	  $query = "SELECT * FROM kategori ORDER BY nama_kategori asc";
      $result = mysqli_query($koneksi, $query);

      while ($row = mysqli_fetch_assoc($result)) {
	?>
      <option value="<?php echo $row ['nama_kategori'];?>"><?php echo $row ['nama_kategori'] ;?></option>
	<?php } ?>
    </select>
</div>

    
    <div>
    <label id="label">Nama  </label> 
        <input type="text" name="nama" autofocus="" require="" value="<?php echo $data['nama'] ?>"/>
    </div>

    <div>
        <label id="label"> Keterangan </label> 
        <input type="text" name="keterangan"  value="<?php echo $data['keterangan'] ?>"/>
    </div>

    <div>
        <label id="label"> Gambar Kamus </label> 
        <img src="gambar/<?php echo $data['gambar_kamus']; ?>" style="width: 100px; float: left; margin-bottom: 5px;">
        <input type="file" name="gambar_kamus" require="" />
    </div>

    <div>
        <label id="label"> Vidio Kamus </label> 
        <img src="vidio/<?php echo $data['vidio_kamus']; ?>" style="width: 100px; float: left; margin-bottom: 5px;">
        <input type="file" name="vidio_kamus" require="" />
    </div>
    
    <br>
    <div>
        <button id="button" type="submit"> Simpan Perubahan </button> 
    </div>
   
    <br>
    <center><a href="?modul=kamus" id="a"> Lihat Data </a></center>
    </section>
    </form>
</body>
</html>