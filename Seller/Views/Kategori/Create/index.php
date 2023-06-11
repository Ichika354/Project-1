<?php
session_start();
if (!isset($_SESSION["penjual"])) {
    header("Location: ../../../../");
    exit;
}


require "../../../../Function/index.php";


function tambah($data)
{
    global $connect;


    $id_penjual = $_SESSION["id_user"] ;
    $nama = $data["nama"];
    

    $query = "INSERT INTO kategori VALUES ('','$id_penjual' ,'$nama')";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo
        "<script>
                alert('Kategori berhasil ditambahkan');
                window.location.href = '../';
            </script>";
    } else {
        echo
        "<script>
                alert('Kategori gagal ditambahkan :( ');
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

<body>

    <!-- <?php include("../Navbar_Seller/index.php") ?> -->


    <div class="main-pages">
        <div class="container-fluid">
            <div class="row g-2">
                <div class="col-12 col-lg-6 w-100">
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between flex-wrap gap-5 title-table w-100">
                                <h1>TAMBAH KATEGORI</h1>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between  flex-wrap gap-5 title-table w-100">
                                <form action="" method="post">
                                    <table>
                                        <tr>
                                            <td class="p-5"><label for="nama">Nama Kategori</label></td>
                                            <td class="pe-3">:</td>
                                            <td><input type="text" placeholder="isi kategori..." name="nama" id="nama" require class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><button type="submit" name="submit" class="btn btn-primary">Tambah </button></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>