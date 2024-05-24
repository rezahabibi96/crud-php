<?php
    require_once('db.php');
  
    $id = $_GET['id'];

    $query = "SELECT * FROM shoes WHERE id=$id";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <br><br>

        <h2>Update Data</h2>

        <br><br>

        <form action="update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="merk" class="form-label">Merk Sepatu</label>
                <input type="text" class="form-control" id="merk" placeholder="Adidas Messi" name="merk" value=<?php echo $data['merk'] ?>>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga Sepatu</label>
                <input type="number" step="1" class="form-control" id="harga" placeholder="1000000" name="harga" value=<?php echo $data['harga'] ?>>
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun Sepatu</label>
                <input type="number" step="1" class="form-control" id="tahun" placeholder="2024" name="tahun" value=<?php echo $data['tahun'] ?>>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori Sepatu</label>
                <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                    <option value="new" <?php if ($data['kategori'] == 'new') echo 'selected' ?> >new</option>
                    <option value="preloved" <?php if ($data['kategori'] == 'preloved') echo 'selected' ?> >preloved</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok Sepatu</label>
                <input type="number" step="1" class="form-control" id="stok" placeholder="10" name="stok" value=<?php echo $data['stok'] ?>>
            </div>

            <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit">
        </form>
    </div>
</body>

</html>