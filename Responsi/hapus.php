<?php

require('koneksi.php');

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM keranjang WHERE id='$id'");
header('Location: keranjang.php');