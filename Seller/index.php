<?php
session_start();
if (!isset($_SESSION["penjual"])) {
    header("Location: ../");
    exit;
}

$id_user = $_SESSION["id_user"];

require "../Function/index.php";
$npm = $_SESSION["user"];
$queryUser = mysqli_query($connect, "SELECT * FROM users WHERE npm = '$npm'");
$profile = mysqli_fetch_assoc($queryUser);

$kategori = mysqli_query($connect, "SELECT * FROM kategori WHERE id_user = $id_user");
$jumlahKategori = mysqli_num_rows($kategori);

$produk = mysqli_query($connect, "SELECT * FROM produk WHERE id_user = $id_user");
$jumlahproduk = mysqli_num_rows($produk);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="Views/Style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <?php include("Views/Navbar_Seller/index.php") ?>

    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2 mb-3">
                <div class="col-12">
                    <div class="d-block bg-white rounded shadow p-3">
                        <h2>Hello <?= $profile["username"]; ?></h2>
                        <p>Selamat datang di halaman admin! Kami sangat senang Anda telah bergabung dengan kami sebagai administrator. Halaman ini memberikan akses dan kontrol penuh untuk mengelola dan mengatur berbagai aspek yang terkait dengan situs atau aplikasi ini.</p>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-2 col-sm-6 col-md-6 col-lg-6">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-bars float-start fa-3x py-auto" aria-hidden="true"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title"><?= $jumlahKategori; ?></h5>
                                <p class="card-text">Kategori</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Kategori</small>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-6 col-md-6 col-lg-6">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa-solid fa-box float-start fa-3x py-auto"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title"><?= $jumlahproduk; ?></h5>
                                <p class="card-text">Produk</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Your Produk</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>