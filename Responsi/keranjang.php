<?php
    require('koneksi.php');
    $result = mysqli_query($conn, "SELECT * FROM keranjang");
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
        table{
            margin-top: 15px;
            margin-bottom:15px;
        }
        .hapus{
            text-decoration: none;
            background-color: red;
            color: white;
            font-size:10px;
            padding: 3px;
            border-radius: 5px;
        }
        .hapus:hover{
            opacity: 0.8;
        }
        .tambah{
            text-decoration: none;
            background-color: blue;
            color: white;
            padding: 3px;
            border-radius: 5px;
        }
        .tambah:hover{
            opacity: 0.8;
        }
        .bayar{
            text-decoration: none;
            background-color: yellow;
            color: grey;
            padding: 3px;
            border-radius: 5px;
        }
        .bayar:hover{
            opacity: 0.8;
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
<h3>Pesanan</h3>
<a class="tambah" href="index.php">+ Tambah Item</a>
    <table border="1" align="center" width="500">
        <tr>
            <td width="35%">Daftar Menu</td>
            <td width="35%">Harga Satuan</td>
            <td width="20%">Jumlah</td>
            <td width="10%">Aksi</td>
        </tr>
        <?php 
            while($data = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['harga_barang']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
            <td><a class="hapus" href="<?php echo "hapus.php?id=".$data['id']; ?>">Hapus</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <a class="bayar" href="bayar.php">Bayar</a>
</body>
</html>