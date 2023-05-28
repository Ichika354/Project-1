<?php
session_start();

require "Function/index.php";


$goods = query("SELECT a.*,b.nama AS nama_kategori FROM produk a INNER JOIN kategori b ON a.id_kategori=b.id_kategori");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Present Store</title>
    <link rel="stylesheet" href="Assets/Style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
    <!-- Navbar -->
    <?php include("Seller/Views/Navbar/index.php"); ?>
    <!-- Navbar -->

    <!-- Landing page -->
    <!-- <?php //include("Customer/Views/LandingPage/index.php"); 
            ?> -->

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Assets/Images/kado/kado_biasa_1.jpg" width="20" height="500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Assets/Images/kado/kado_biasa_1.jpg" width="20" height="500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Assets/Images/kado/kado_biasa_1.jpg" width="20" height="500" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Landing page end -->
    <div class="container">
        <div class="text mt-3">
            <h2>Produk</h2>
        </div>
        <!-- Card -->

        <div class="ps-5 d-flex row justify-content-center align-items-center">
            <?php foreach ($goods as $goodses) : ?>
                <div class="container col-4 mt-5 ">
                    <div class="card" style="width: 18rem;">
                        <img src="Seller/img/FotoProduk/<?= $goodses["foto"]; ?>" height="250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $goodses["nama_produk"]; ?></h5>
                            <p class="card-text">Harga : <?= $goodses["harga"]; ?></p>
                            <p class="card-text">Kategori : <?= $goodses["nama_kategori"]; ?></p>
                            <p class="card-text"><?= $goodses["detail"]; ?></p>
                            <a href="#" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Card end -->
        </div>
        <!-- Deskripsi -->
        <div class="mt-5 d-flex justify-content-center align-items-center">
            <div class="card mb-3" style="max-width: 1000px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="Assets/Images/kado/kado_biasa_1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Hallo Mahasiswa</h5>
                            <p class="card-text">Di sini, kami ingin menginspirasi dan mendukung semangat wirausaha dalam diri Anda. Wirausaha adalah perjalanan penuh tantangan dan peluang, dan kami hadir untuk memberikan informasi, saran, dan sumber daya yang dapat membantu Anda meraih kesuksesan.</p>
                            <br>
                            <p class="card-text">
                                Kami percaya bahwa jiwa wirausaha dapat membawa perubahan positif dalam kehidupan seseorang dan masyarakat. Melalui halaman ini, kami berkomitmen untuk menyajikan konten yang relevan, inovatif, dan berguna bagi para calon wirausaha, pemilik bisnis, dan para penggiat ekonomi kreatif.
                            </p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 d-flex justify-content-center align-items-center">
            <div class="card mb-3" style="max-width: 1000px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body pt-5">
                            <h5 class="card-title">Bergabunglah dengan Komunitas Wirausaha Kami!</h5>
                            <p class="card-text">Apakah Anda memiliki semangat wirausaha yang membara? Apakah Anda ingin meraih keberhasilan dan menginspirasi orang lain dengan perjalanan bisnis Anda? Jika ya, maka halaman Wirausaha Kami adalah tempat yang tepat bagi Anda!
                                Ingin menjual barang di website kami? gabung <a href="log/regis/views/index.php">sekarang</a>
                            </p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="Assets/Images/kado/kado_biasa_1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <!-- Deskripsi end -->
    </div>
    <footer>
        <p class="mb-0 bg-dark" style="height: 15vh;">Test</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>