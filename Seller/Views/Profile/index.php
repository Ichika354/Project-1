<?php
session_start();

require "../../../Function/index.php";

$username = $_SESSION["user"];
$queryUser = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
$profile = mysqli_fetch_assoc($queryUser);

function foto($data)
{
    global $connect;
    $id = $data["id"];
    $foto = upload();
    $query = "UPDATE users SET
                gambar = '$foto' 
              WHERE id_user = '$id';
    ";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function upload()
{
    $namaFile = $_FILES["file"]["name"];
    $error = $_FILES["file"]["error"];
    $tmpName = $_FILES["file"]["tmp_name"];

    //cek apakah ada foto yg di upload atau tidak
    if ($error === 4) {
        echo
        "<script>
                alert('Upload foto terlebih dahulu');
            </script>";
        return false;
    }

    //cek apakah yang di upload foto atau bukan
    $ekstensiFotoValid = ["jpg", "jpeg", "png"];
    $ekstensiFoto = explode('.', $namaFile);
    $ekstensiFoto = strtolower(end($ekstensiFoto));

    if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {
        echo
        "<script>
             alert('Upload foto dongg');
         </script>";
        return false;
    }
    //lolos semua pengecekan
    //generate nama foto baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFoto;




    move_uploaded_file($tmpName, '../../img/FotoUser/' . $namaFileBaru);

    return $namaFileBaru;
}

if (isset($_POST["submit"])) {

    if (foto($_POST) > 0) {
        echo
        "<script>
                alert('Foto berhasil ditambahkan');
            </script>";
    } else {
        echo
        "<script>
                alert('Foto gagal ditambahkan :( ');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    .Btn {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 45px;
        height: 45px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition-duration: .3s;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
        background-color: rgb(255, 65, 65);
        text-decoration: none;
    }

    .text2 {
        background-color: rgb(255, 65, 65);
    }

    /* plus sign */
    .sign {
        width: 100%;
        transition-duration: .3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sign svg {
        width: 17px;
    }

    .sign svg path {
        fill: white;
    }

    /* text */
    .text {
        position: absolute;
        right: 0%;
        width: 0%;
        opacity: 0;
        color: white;
        font-size: 0.9em;
        font-weight: 600;
        transition-duration: .3s;
    }

    /* hover effect on button width */
    .Btn:hover {
        width: 205px;
        border-radius: 40px;
        transition-duration: .3s;
    }

    .Btn:hover .sign {
        width: 30%;
        transition-duration: .3s;
        padding-left: 20px;
    }

    /* hover effect button's text */
    .Btn:hover .text {
        opacity: 1;
        width: 70%;
        transition-duration: .3s;
        padding-right: 10px;
    }

    /* button click effect*/
    .Btn:active {
        transform: translate(2px, 2px);
    }

    .teks {
        cursor: pointer;
    }
</style>

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
                                        <div class="col">
                                            <img src="../../img/FotoUser/<?= $profile["gambar"]; ?>" alt="Foto <?= $profile["username"]; ?>" class="rounded mx-auto d-block w-50" width="200" height="300">
                                        </div>
                                    </div>
                                    <div class="Btn text-white ms-auto">
                                        <div class="sign">
                                            <i class="fa fa-plus fa-lg box-icon" aria-hidden="true"></i>
                                        </div>
                                        <div class="text ">
                                            <form action="" method="post" enctype="multipart/form-data" class="d-flex">
                                                <input type="hidden" name="id" value="<?= $profile["id_user"]; ?>">
                                                <input type="file" id="file" name="file" file style="display: none;">
                                                <label for="file" class="file-input-label teks">Add Image</label>
                                                <button class="btn text2" name="submit">input</button>
                                            </form>
                                        </div>
                                        <!-- <div class="text">Add Image</div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        </main>
    </div>

</body>

<script>
    document.getElementById("file").addEventListener("change", function() {
        var files = this.files;
        if (files && files.length > 0) {
            var fileName = files[0].name;
            document.querySelector(".file-input-label").textContent = fileName;
        } else {
            document.querySelector(".file-input-label").textContent = "Choose File";
        }
    });
</script>

</html>