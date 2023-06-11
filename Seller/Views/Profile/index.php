<?php
session_start();

require "../../../Function/index.php";

$username = $_SESSION["user"];
$queryUser = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
$profile = mysqli_fetch_assoc($queryUser);


?>
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



    <div id="layoutSidenav_content">
        <main class="p-4">
            <!-- <div class="container-fluid px-4 ">
                    <h1 class="">Profile</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">My Account</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div> -->
            <br>
            <div class="main-pages">
                <div class="container-fluid">
                    <div class="row g-2 mb-3">
                        <div class="col-12">
                            <div class="d-block bg-white rounded shadow p-3">
                                <h4>Hello <?= $profile["username"]; ?></h4>
                                <hr>
                                <div class="container text-align">
                                    <div class="row">
                                        <div class="col">
                                            <table>
                                                <tr>
                                                    <td class="pe-5">
                                                        <p>Nama Lengkap</p>
                                                    </td>
                                                    <td class="pe-3">
                                                        <p>:</p>
                                                    </td>
                                                    <td>
                                                        <p><?= $profile["username"]; ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pe-5">
                                                        <p>NPM</p>
                                                    </td>
                                                    <td class="pe-3">
                                                        <p>:</p>
                                                    </td>
                                                    <td>
                                                        <p><?= $_SESSION["user"] ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>No Telpon</p>
                                                    </td>
                                                    <td>
                                                        <p>:</p>
                                                    </td>
                                                    <td>
                                                        <p><?= $profile["no_telp"]; ?></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Level</p>
                                                    </td>
                                                    <td>
                                                        <p>:</p>
                                                    </td>
                                                    <td>
                                                        <p><?= $profile["level"]; ?></p>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

        </main>
    </div>

</body>

</html>