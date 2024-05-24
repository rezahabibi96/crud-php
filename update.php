<?php
    require_once('db.php');

    $id = $_GET['id'];

    $merk =  $_POST['merk'];
    $harga = $_POST['harga'];
    $tahun = $_POST['tahun'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];

    $query = "UPDATE shoes 
                SET merk='$merk', harga='$harga', tahun='$tahun', kategori='$kategori', stok='$stok'
                WHERE id='$id'";

    mysqli_query($conn, $query);

    echo "<script>alert('Proses Update Data Sukses')</script>";
    echo "<script>window.location.href='read.php'</script>";
?>