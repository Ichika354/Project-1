<?php
require "../Function/index.php";

$id = $_GET["id"];
// $query = mysqli_query($connect,"SELECT a.*, b.nama AS nama_kategori FROM produk a INNER JOIN kategori b ON a.id_kategori=b.id_kategori  WHERE a.id_user = $id")[0];

// $query = query("SELECT * FROM produk WHERE id = $id")[0];
$query = query("SELECT a.*, b.nama AS nama_kategori, c.*  FROM produk a INNER JOIN kategori b ON a.id_kategori = b.id_kategori INNER JOIN users c ON a.id_user = c.id_user WHERE a.id = '$id'
")[0];

$harga = $query["harga"];
$rupiah = number_format($harga, 0, '.', '.');

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
    </section>
    <div class="container mt-5">
        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../Seller/img/FotoProduk/<?= $query["foto"]; ?>" class="img-fluid rounded-start h-100" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td class="pe-3 pb-2">Seller</td>
                                <td class="pe-3 pb-2"> </td>
                                <td class="pe-3 pb-2">
                                    <b>
                                        <?= $query["username"]; ?>
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-3 pb-2">No Telp</td>
                                <td class="pe-3 pb-2"> </td>
                                <td class="pe-3 pb-2">
                                    <?= $query["no_telp"]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-3 pb-2">Produk</td>
                                <td class="pe-3 pb-2"> </td>
                                <td class="pe-3 pb-2">
                                    <?= $query["nama_produk"]; ?>

                                </td>

                            </tr>
                            <tr>
                                <td class="pe-3 pb-2">Harga</td>
                                <td class="pe-3 pb-2"> </td>
                                <td class="pe-3 pb-2">
                                    Rp <?= $rupiah ?> / unit
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-3 pb-2">Stok</td>
                                <td class="pe-3 pb-2"> </td>
                                <td class="pe-3 pb-2">
                                    <?= $query["stok"]; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-3 pb-2">Deskripsi</td>
                                <td class="pe-3 pb-2"> </td>
                                <td class="pe-3 pb-2"><?= $query["detail"]; ?></td>

                            </tr>
                        </table>
                        <a href="../" class="btn btn-warning">BACK</a>
                        <a href="../Transaksi/?id=<?= $query["id"]; ?>" class="btn btn-primary">BUY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>