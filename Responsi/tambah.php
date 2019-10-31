<?php

require('koneksi.php');

$barang = $_GET['nama_barang'];

$dataB = mysqli_query($conn, "SELECT * FROM barang WHERE nama_barang='$barang'");
$dataBarang = mysqli_fetch_assoc($dataB);

$dataK = mysqli_query($conn, "SELECT * FROM keranjang WHERE nama_barang='$barang'");
$dataKeranjang = mysqli_fetch_assoc($dataK);

if($dataKeranjang['id'] != null){
    $jumlah = $dataKeranjang['jumlah'] + 1;
    $tambahData = mysqli_query($conn, "UPDATE keranjang set jumlah=$jumlah WHERE nama_barang='$barang'");
    header('Location: keranjang.php');
}else{
    $namaBarang = $dataBarang['nama_barang'];
    $hargaBarang = $dataBarang['harga_barang'];
    $tambahData = mysqli_query($conn, "INSERT INTO keranjang (nama_barang, harga_barang, jumlah) VALUES ('$namaBarang', $hargaBarang , 1)");
    header('Location: keranjang.php');
}