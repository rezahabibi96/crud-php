<?php
    require_once('db.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM shoes
                WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    $rows = mysqli_num_rows($result);
    $data = mysqli_fetch_assoc($result);

    if ($rows==0) {
        echo "<script>alert('Data Id Not Found')</script>";
        echo "<script>window.location.href='read.php'</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <br><br>
        <h2>Product Detail</h2>
        <br><br>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="uploaded/<?php echo $data['image'] ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['merk'] ?></h5>
                        <p class="card-text"><?php echo $data['tahun'] . " / " . $data['kategori'] ?></p>
                        <p class="card-text"><?php echo $data['harga'] ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"><?php echo $data['stok'] . " available stock " ?></small></p>
                        <button type="button" class="btn btn-success btn-lg">checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
