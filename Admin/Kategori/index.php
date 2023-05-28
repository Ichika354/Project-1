<?php
// require "../Function/index.php";

// $queryKategori = mysqli_query($connect, "SELECT * FROM kategori");
// $jumlahKategori = mysqli_num_rows($queryKategori);

// $queryProduk = mysqli_query($connect, "SELECT * FROM produk");
// $jumlahProduk = mysqli_num_rows($queryProduk);


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
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <?php include "../Navbar/index.php"; ?>



    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>DATA KATEGORI</h1>
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
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php //foreach($queryKategori as $kategori) :
                                    ?>
                                    <?php //while ($row = mysqli_fetch_assoc($queryKategori)) : ?>

                                        <tr>
                                            <td scope="row"><?= $i; ?></td>
                                            <td></td>
                                            <td>
                                                <a class="btn btn-secondary" href="../Kategori/Detail/?id=<?= $row["id_kategori"]; ?>">Cari</a>
                                                <!-- <a class="btn btn-danger" href="../Kategori/Delete/?id=<?= $kategori["id_kategori"]; ?>" onclick="return confirm('Yakin mau di hapus?')">hapus</a> -->
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php //endwhile; ?>
                                </table>
                                <a href="Create/" class="btn btn-primary">INPUT</a>
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