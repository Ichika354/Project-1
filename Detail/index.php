<?php
require "../Function/index.php";

$id = $_GET["id"];
$query = query("SELECT a.*, b.nama AS nama_kategori FROM produk a INNER JOIN kategori b ON a.id_kategori=b.id_kategori  WHERE a.id_user = $id")[0];

// $query = query("SELECT * FROM produk WHERE id_user = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reza's Restaurant</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar bg-light w-100">
        <div class="container-fluid">
            <a class="navbar-brand ms-3">haloo</a>
        </div>
    </nav>

    <!-- Navbar end -->

    <!-- content -->
    <section class="jumbotron text-center" id="home">
        <h1 class="display-4" id="nama"></h1>
        <p class="lead">If you want to buy some food or drink you can buy my recommandation</p>
    </section>

    <div class="row d-flex justify-content-center align-items-center w-100 mt-3 gap-4">
        <?php  foreach($query as $produk): ?>
        <div class="card col-sm-6" style="width: 18rem">
            <img src="../Seller/img/FotoProduk/<?= $produk["foto"]; ?>" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title"><?= $produk["nama_produk"]; ?></h5>
                <p class="card-text">Rp. <?= $produk["harga"]; ?></p>
                <p class="card-text"><?= $produk["nama_kategori"]; ?></p>
                <p class="card-text"><?= $produk["stok"]; ?></p>
                <p class="card-text"><?= $produk["detail"]; ?></p>
                <button class="btn btn-primary" >Buy</button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center w-100">
        <p class="lead">Donate via Dana</p>
        <img src="assets/images/QR Dana.jpg" class="w-25" alt="" />
    </div>
    <nav class="navbar">
        <div class="link d-flex justify-content-center align-items-center w-100 gap-3">
            <a href="https://www.instagram.com/fchrz.0/?hl=en"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UClcN3-E_J7CSlzv-vAeHayQ/featured"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.facebook.com/Muh.Facfarhan"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.tiktok.com/@ichikachan33"><i class="fa-brands fa-tiktok"></i></a>
        </div>
        <div class="container-fluid">
            <p class="navbar-brand text-center w-100">©Copyright 2022(Ichika)</p>
        </div>
    </nav>
    <!-- content -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>