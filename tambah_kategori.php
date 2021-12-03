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
    <center><h2> Tambah Kategori</h2></center>
    <form method="POST" action="simpan_kategori.php"  enctype="multipart/form-data"
    
    <section class="base">
    
    <div>
        <label id="label"> Nama Kategori </label> 
        <input type="text" name="nama_kategori" autofocus="" require=""/>
    </div>

    <div>
        <label id="label"> Keterangan </label> 
        <input type="text" name="keterangan" />
    </div>
    
    <br>
    <div>
        <button id="button" type="submit"> Simpan Kategori </button> 
    </div>
   
    <br>
    <center><a href="?modul=kategori" id="a"> Lihat Data </a></center>
    </section>
    </form>
</body>
</html>