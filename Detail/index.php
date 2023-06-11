<?php
require "../Function/index.php";

$id = $_GET["id"];
// $query = mysqli_query($connect,"SELECT a.*, b.nama AS nama_kategori FROM produk a INNER JOIN kategori b ON a.id_kategori=b.id_kategori  WHERE a.id_user = $id")[0];

$query = query("SELECT * FROM produk WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar bg-light w-100">
        <div class="container-fluid">
            <a class="navbar-brand ms-3">Haloo</a>
        </div>
    </nav>

    <!-- Navbar end -->

    <!-- content -->
    <section class="jumbotron text-center" id="home">
        <h1 class="display-4" id="nama"></h1>
        <!-- <p class="lead">If you want to buy some food or drink you can buy my recommandation</p> -->
    </section>
    <div class="container mt-5">
        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../Seller/img/FotoProduk/<?= $query["foto"]; ?>" class="img-fluid rounded-start h-100" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $query["nama_produk"]; ?></h5>
                        <p class="card-text">Rp. <?= $query["harga"]; ?></p>
                        <p class="card-text"><?= $query["stok"]; ?> stok</p>
                        <p class="card-text"><?= $query["detail"]; ?></p>
                        <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                        <a href="/" class="btn btn-primary">BUY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row d-flex justify-content-center align-items-center w-100 mt-3 gap-4">
        <div class="card col-sm-6" style="width: 18rem">
            <img src="" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title"><?= $query["nama_produk"]; ?></h5>
                <p class="card-text">Harga : Rp. <?= $query["harga"]; ?></p>
                <p class="card-text">kategori : <?= $query["nama_kategori"]; ?></p>
                <p class="card-text">Stok : <?= $query["stok"]; ?></p>
                <p class="card-text">Detail : <?= $query["detail"]; ?></p>
                <button class="btn btn-primary" >Buy</button>
            </div>
        </div>
    </div> -->

    <!-- content -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>