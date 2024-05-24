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

        <h2>Tambah Data</h2>

        <br><br>

        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="merk" class="form-label">Merk Sepatu</label>
                <input type="text" class="form-control" id="merk" placeholder="Adidas Messi" name="merk">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga Sepatu</label>
                <input type="number" step="1" class="form-control" id="harga" placeholder="1000000" name="harga">
            </div>

            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun Sepatu</label>
                <input type="number" step="1" class="form-control" id="tahun" placeholder="2024" name="tahun">
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori Sepatu</label>
                <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                    <option value="new">new</option>
                    <option value="preloved">preloved</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok Sepatu</label>
                <input type="number" step="1" class="form-control" id="stok" placeholder="10" name="stok">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image Sepatu</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>

            <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit">
        </form>
    </div>
</body>

</html>