<?php

session_start();

if (isset($_SESSION["penjual"])) {
    header("Location: ../../../Seller/");
} elseif (isset($_SESSION["admin"])) {
    header("Location: ../../../Admin/");
}

require "../../../Function/index.php";

if (isset($_POST["submit"])) {

    $npm = $_POST["npm"];
    $password = $_POST["password"];


    $result = mysqli_query($connect, "SELECT * FROM users WHERE npm = '$npm'");


    //cek username
    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        //cek password
        $verif = password_verify($password, $row["password"]);
            if ($verif) {
                $_SESSION["penjual"] = true;
                $_SESSION["user"] = $npm;
                $_SESSION["id_user"] = $row["id_user"];
                echo "<script>
                                window.location.href = '../../../Seller/'
                            </script>";
                exit;
            } 
        
        
    }
    $result2 = mysqli_query($connect, "SELECT * FROM users WHERE npm = '$npm' AND password = '$password' ");
    $cek = mysqli_num_rows($result2);

    if ($cek > 0) {

        $data = mysqli_fetch_assoc($result2);

        if ($data["level"] === "admin") {
            $_SESSION["admin"] = true;
            $_SESSION["user_admin"] = $npm;
            echo "<script>
                    window.location.href = '../../../Admin/'
                </script>";
        }
    }
    $error = true;
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

    <div class="text-center pt-5">
        <h1>Halaman login</h1>
    </div>

    <div class="login-box">
        <form method="POST">
            <?php if (isset($error)) : ?>
                <p class="text-danger">NPM atau password salah</p>
            <?php endif; ?>
            <div class="user-box">
                <input type="text" name="npm" required="">
                <label>NPM</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            
            <div class="d-flex justify-content-between align-items-center">
                <a href="../../../" class="back a">
                    BACK
                    <span></span>
                </a>
                <button name="submit" class="login a">
                    LOGIN
                    <span></span>
                </button>
            </div>
            <!-- <div class="regis text-white text-center mt-5">
                <p>Don't have account? Regis <a href="../../regis/views/index.php">Here</a> </p>
            </div> -->

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>