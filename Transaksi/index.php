<?php
session_start();

require "../Function/index.php";


$id = $_GET["id"];
$produk = query("SELECT a.*, b.nama AS nama_kategori FROM produk a INNER JOIN kategori b ON a.id_kategori=b.id_kategori  WHERE a.id = $id")[0];

$harga = $produk["harga"];
$rupiah = number_format($harga, 0, '.', '.');

function beli($data)
{
    global $connect;

    $id = $data["id"];
    $jumlah = $data["jumlah"];

    $queryProduk = mysqli_prepare($connect, "SELECT * FROM produk WHERE id = ?");
    mysqli_stmt_bind_param($queryProduk, "i", $id);
    mysqli_stmt_execute($queryProduk);

    $result = mysqli_stmt_get_result($queryProduk);
    $produk = mysqli_fetch_assoc($result);

    $harga = $produk["harga"];
    $stokBaru = $produk["stok"] - $jumlah;

    $query = "UPDATE produk SET stok = ? WHERE id = ?";
    $queryStok = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($queryStok, "ii", $stokBaru, $id);
    mysqli_stmt_execute($queryStok);

    if (mysqli_stmt_affected_rows($queryStok) > 0) {
        $totalHarga = $harga * $jumlah;
        $queryTotal = "INSERT INTO transaksi VALUES (NULL, ?, ?, NOW())";
        $queryInsert = mysqli_prepare($connect, $queryTotal);
        mysqli_stmt_bind_param($queryInsert, "ii", $totalHarga, $jumlah);
        mysqli_stmt_execute($queryInsert);

        if (mysqli_stmt_affected_rows($queryInsert) > 0) {
            return true;
        }
    }

    return false;
}



if (isset($_POST["submit"])) {
    if (beli($_POST) > 0) {
        echo
        "<script>
                alert('Transaksi Berhasil');
                window.location.href = '../';
            </script>";
    } else {
        echo
        "<script>
                alert('Transaksi gagal :( ');
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
                                <h1>TRANSAKSI</h1>
                            </div>
                            <div class="table mt-5">

                            </div>
                        </div>
                    </div>
                    <div class="d-block rounded shadow bg-white p-3 mt-3">
                        <div class="cust-table">
                            <div class="d-flex justify-content-between ps-5 pt-1 flex-wrap gap-5 title-table w-100">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table>
                                        <input type="hidden" name="id" value="<?= $produk["id"] ?>">
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="produk">Nama Produk</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <input disabled type="text" placeholder="isi produk..." name="produk" id="produk" required class="form-control" value="<?= $produk["nama_produk"]; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="kategori">Kategori</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <input disabled type="text" class="form-control" name="id" value="<?= $produk["nama_kategori"] ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="harga">Harga Produk</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4"><input disabled type="number" placeholder="isi harga..." name="harga" id="harga" required class="form-control" value="Rp <?= $rupiah  ; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-4 pb-4"><label for="jumlah">Jumlah</label></td>
                                            <td class="pe-3 pb-4">:</td>
                                            <td class="pb-4">
                                                <input type="number" placeholder="jumlah yang ingin di beli..." name="jumlah" id="jumlah" required class="form-control" min="0">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <a href="../Detail/?id=<?= $produk["id"]; ?>" class="btn btn-warning">Back</a>
                                                <button type="submit" name="submit" class="btn btn-primary">Beli </button>
                                            </td>
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

<script>
    document.getElementById("jumlah").addEventListener("input", function() {
        if (this.value < 0) {
            this.value = 0; // Set nilai menjadi 0 jika nilai kurang dari 0
        }
    });
</script>

</html>