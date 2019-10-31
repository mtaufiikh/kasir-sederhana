<?php
    require('koneksi.php');
    $result = mysqli_query($conn, "SELECT * FROM keranjang");
    $jumlahBayar = 0 ;
    while($data = mysqli_fetch_array($result)){
        $jumlah = $data['harga_barang'] * $data['jumlah'];
        $jumlahBayar += $jumlah;
    }

    mysqli_query($conn, "DELETE FROM keranjang");

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
    </style>
</head>
<body>
    <h3>Total Bayar : <?php echo $jumlahBayar ?> </h3>
    <a class="tambah" href="index.php">Kembali ke Menu</a>
</body>
</html>
