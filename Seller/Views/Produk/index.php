<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <?php include("../Navbar_Seller/index.php") ?>

    
    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>Pelanggan Terbaru</h1>
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
                                        <th scope="col">Game</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">ID Game</th>
                                        <th scope="col">Jumlah Diamond</th>
                                        <th scope="col">Pembayaran</th>
                                        <th scope="col">Tanggal Pembayaran</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                        <tr>
                                            <td scope="row"><?= $i; ?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td> </td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>