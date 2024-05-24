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

        <h2>Shoe Shop</h2>

        <br><br>

        <div class="row row-cols-3 g-3">
            <?php
                for ($index=0; $index<$rows; $index++) {

                
            ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo 'uploaded/' . $data[$index]["image"] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data[$index]["harga"] ?></h5>
                                <p class="card-text"><?php echo $data[$index]["merk"] ?></p>
                                <a href="#" class="btn btn-primary">Product Detail</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</body>

</html>