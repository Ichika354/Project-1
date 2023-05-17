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
                        <h2>hello world</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum labore maiores facilis
                            optio illo tempora quod omnis veniam dolores. Est porro omnis, quae numquam velit
                            accusantium perferendis inventore sint consectetur.</p>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-bars float-start fa-3x py-auto" aria-hidden="true"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title">122</h5>
                                <p class="card-text">Kategori</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Kategori</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa-solid fa-box float-start fa-3x py-auto"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title">2</h5>
                                <p class="card-text">Produk</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Your Money</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-calendar float-start fa-3x py-auto" aria-hidden="true"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title">122</h5>
                                <p class="card-text">Pleanning</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Your Schedule</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="card p-2 shadow">
                        <div class="d-flex align-items-center px-2">
                            <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                            <div class="card-body text-end">
                                <h5 class="card-title">122</h5>
                                <p class="card-text">Customer</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <small class="text-start fw-bold">Your Customer</small>
                        </div>
                    </div>
                </div>
            </div>

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