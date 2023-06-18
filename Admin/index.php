<?php 
    require "../Function/index.php";

    $queryKategori = mysqli_query($connect, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryProduk = mysqli_query($connect, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);

    $queryPenjual = mysqli_query($connect, "SELECT * FROM users WHERE level = 'penjual' ORDER BY id_user DESC");
    $jumlahUsers = mysqli_num_rows($queryPenjual);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <?php include "Navbar/index.php"; ?>

    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2 mb-3">
                <div class="col-12">
                    <div class="d-block bg-white rounded shadow p-3">
                        <h2>Selamat Datang <?= $profile["username"]; ?></h2>
                        <p>Selamat datang, Admin! Anda telah berhasil masuk ke dalam sistem dengan level akses admin. Semoga Anda memiliki pengalaman yang menyenangkan dan sukses dalam menjalankan tugas-tugas administratif Anda. Jika Anda memerlukan bantuan atau informasi lebih lanjut, jangan ragu untuk menghubungi kami. Terima kasih atas dedikasi dan kontribusi Anda dalam menjaga kelancaran sistem ini.</p>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-bars float-start fa-3x py-auto" aria-hidden="true"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title"><?php echo $jumlahKategori; ?></h5>
                                <p class="card-text">Kategori</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Kategori</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa-solid fa-box float-start fa-3x py-auto"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title"><?php echo $jumlahProduk; ?></h5>
                                <p class="card-text">Produk</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Produk</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title"><?php echo $jumlahUsers; ?></h5>
                                <p class="card-text">Penjual</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Penjual</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>Penjual Terbaru</h1>
                                <form class="d-flex " role="search" method="post">
                                    <table>
                                        <tr>
                                            <td>
                                                <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-success" name="search">Search</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="table mt-5">
                                <table class="table ms-0">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Penjual</th>
                                    </tr>
                                    <?php $i = 1 ?>
                                    <?php foreach($queryPenjual as $penjual) : ?>
                                        <tr>
                                            <td scope="row"><?= $i; ?></td>
                                            <td><?= $penjual["username"] ?></td>
                                        </tr>
                                    <?php $i++ ?>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>