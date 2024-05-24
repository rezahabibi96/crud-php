<?php
    require_once('db.php');

    $query = "SELECT * FROM shoes";
    $result = mysqli_query($conn, $query);

    $rows = mysqli_num_rows($result);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <br><br>

        <h2>Data Persediaan</h2>
        <a class="btn btn-primary" href="create_form.php" role="button">Tambah Data</a>

        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">MERK</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">STOK</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">TINDAKAN</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    for ($index = 0; $index < $rows; $index++) {
                ?>
                        <tr>
                            <td> <?php echo $data[$index]["merk"] ?> </td>
                            <td> <?php echo $data[$index]["harga"] ?> </td>
                            <td> <?php echo $data[$index]["tahun"] ?> </td>
                            <td> <?php echo $data[$index]["kategori"] ?> </td>
                            <td> <?php echo $data[$index]["stok"] ?> </td>
                            <td> <img src="<?php echo 'uploaded/' . $data[$index]["image"] ?>" class="img-thumbnail" width="100" height="100"> </td>
                            <td>
                                <a class="btn btn-warning" href="update_form.php?id=<?php echo $data[$index]["id"] ?>" role="button">Ubah Data</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $data[$index]["id"] . '&image=' . $data[$index]["image"] ?>" role="button">Hapus Data</a>
                            </td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>