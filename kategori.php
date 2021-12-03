<?php include "koneksi.php"; ?>

<html>
<head>
    <title>KATEGORI</title>
    <style type="text/css">
        *{
            font-family: "Trebuchet MS";
        }

        h2{
            text-transform: uppercase;
            color:white;
        }

        table{
            border: 1px solid #ddeeee;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }

        table thead th {
            background-color: #ddefef;
            border: 1px solid #ddeeee;
            color: #336b6b;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;

        }

        table tbody td {
            border: 1px solid #ddeeee;
            color: #333;
            padding: 10px;
        }

        #a{
            background-color: salmon;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            text-decoration: none;

        }

        #td{
            color: white;
            font-family: 
        }        

    </style>

</head>
<body>
    <center><h2>Data Kategori</h2></center>
    <center><a href="?modul=tambah_kategori" id="a">+ &nbsp; Tambah Kategori </a></center>
    <br>
    <table>
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama Kategori</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM kategori ORDER BY id_kategori";
                $result = mysqli_query($koneksi, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }

            $no = 1;

            while ($row = mysqli_fetch_assoc($result)){

            
        ?>
        <tr>
                <td id="td"><?php echo $no; ?></td>
                <td id="td"><?php echo $row['nama_kategori']; ?></td>
                <td id="td"><?php echo $row['keterangan']; ?></td>

                <td>
                 <a href="?modul=edit_kategori&id_kategori=<?php echo $row['id_kategori'] ;?>" id="a">Edit</a>
                    <a href="hapus_kategori.php?id_kategori=<?php echo $row['id_kategori']; ?>" id="a" onclick="return confirm('Anda Yakin ingin hapus data ini?')">Delete</a>
                </td>
        </tr>
        <?php 
        $no++;
    }
        ?> 

        </tbody>
        </table>




</html>