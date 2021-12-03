<?php include "koneksi.php"; ?>


<html>
<head>
    <title> Tambah Kamus </title>
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
    <center><h2> Tambah Kamus</h2></center>
    <form method="POST" action="simpan_kamus.php"  enctype="multipart/form-data">
    
    <section class="base">

<div>
    <label id="label">  Nama Kategori </label>
    <select  id="select" name="nama_kategori">
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
        <input type="text" name="nama" autofocus="" require=""/>
    </div>

    <div>
        <label id="label"> Keterangan </label> 
        <input type="text" name="keterangan" />
    </div>

    <div>
        <label id="label"> Gambar Kamus </label> 
        <input type="file" name="gambar_kamus" require="" />
    </div>

    <div>
        <label id="label"> Vidio Kamus </label> 
        <input type="file" name="vidio_kamus" require="" />
    </div>
    
    <br>
    <div>
        <button id="button" type="submit"> Simpan Kategori </button> 
    </div>
   
    <br>
    <center><a href="?modul=kamus" id="a"> Lihat Data </a></center>
    </section>
    </form>
</body>
</html>