<?php
    require('koneksi.php');
    $result = mysqli_query($conn, "SELECT * FROM barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KASIR SOTO</title>
    <style>
        body{
            text-align: center;
        }
        .pilih{
            text-decoration: none;
            background-color: green;
            color: white;
            font-size:10px;
            padding: 3px;
            border-radius: 5px;
        }
        .pilih:hover{
            opacity: 0.9;
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <h3>SOTO SUEGER POLL</h3>
    <table border="1" align="center" width="500">
        <tr>
            <td width="10%">No</td>
            <td width="40%">Daftar Menu</td>
            <td width="40%">Harga Satuan</td>
            <td width="10%">Aksi</td>
        </tr>
        <?php 
            while($data = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['harga_barang']; ?></td>
            <td><a class="pilih" href="<?php echo "tambah.php?nama_barang=".$data['nama_barang']; ?>">Pilih</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>