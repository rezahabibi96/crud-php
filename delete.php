<?php
    require_once('db.php');

    $id = $_GET['id'];
    $image = $_GET['image'];

    $query = "DELETE FROM shoes 
                WHERE id='$id'";
    
    mysqli_query($conn, $query);

    unlink('uploaded/' . $image);

    echo "<script>alert('Proses Delete Data Sukses')</script>";
    echo "<script>window.location.href='read.php'</script>";
?>