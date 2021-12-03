<?php include "koneksi.php"; 

    if(isset($_GET['id_kategori'])){
        $id_kategori = $_GET['id_kategori'];
        $query = "SELECT * FROM kategori where id_kategori = '$id_kategori'";
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
    <title> Tambah Kategori </title>
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
            

    </style>
</head>
<body>
    <center><h2> Edit Kategori <?php echo $data['nama_kategori'] ?></h2></center>
    <form method="POST" action="prosesedit_kategori.php"  enctype="multipart/form-data"
    
    <section class="base">
    
    <div>
        <label id="label"> Nama Kategori </label> 
        <input type="text" name="nama_kategori" autofocus="" require=""  value=" <?php echo $data['nama_kategori'] ?>"/>
        <input type="hidden" name="id_kategori" value=" <?php echo $data['id_kategori'] ?>"/>
  
    </div>

    <div>
        <label id="label"> Keterangan </label> 
        <input type="text" name="keterangan" value=" <?php echo $data['keterangan'] ?>" />
    </div>
    
    <br>
    <div>
        <button id="button" type="submit"> Simpan Perubahan </button> 
    </div>
   
    <br>
    <center><a href="?modul=kategori" id="a"> Lihat Data </a></center>
    </section>
    </form>
</body>
</html>