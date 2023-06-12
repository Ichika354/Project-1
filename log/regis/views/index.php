<?php

require "../../../Function/index.php";

if (isset($_POST["submit"])) {
    $npm = $_POST["npm"];
    if ($npm >= 614220001 && $npm <= 699220000) {
        if (register($_POST) > 0) {
            echo
            "<script>
                    alert('Akun berhasil terbuat');
                    window.location.href = '../../login/views/index.php'
                </script>";
        } else {
            echo mysqli_error($connect);
        }
    } elseif ($npm >= 714220001 && $npm <= 799220000) {
        if (register($_POST) > 0) {
            echo
            "<script>
                    alert('Akun berhasil terbuat');
                    window.location.href = '../../login/views/index.php'
                </script>";
        } else {
            echo mysqli_error($connect);
        }
    } else {
        echo "<script>
                alert('Maaf anda bukan mahasiswa dari univ kami')
            </script>";
    }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>

    <div class="text-center pt-3">
        <h1>Halaman Register</h1>
    </div>

    <div class="login-box">
        <form method="POST">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Nama Lengkap</label>
            </div>
            <div class="user-box">
                <input type="number" name="email" required="">
                <label>No. Telp</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="confirm" required="">
                <label>Confirm Password</label>
            </div>
            <div class="user-box">
                <input type="text" name="npm" required onfocus="">
                <label>NPM</label>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <a href="../../../" class="back a">
                    BACK
                    <span></span>
                </a>
                <button name="submit" class="login a">
                    Regis
                    <span></span>
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>