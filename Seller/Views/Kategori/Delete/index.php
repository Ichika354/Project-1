<?php 

require '../../../../Function/index.php';
$id = $_GET["id"];

$query = mysqli_query($connect, 
                        "SELECT * FROM kategori 
                         WHERE id_kategori = $id");
$data = mysqli_fetch_array($query);

$count = mysqli_num_rows($query);

if ($count > 0) {
    echo 
    "<script>
        alert('Kategori tidak dapat di hapus karena sudah memiliki produk')
        window.location.href = '../';
    </script>";
    die();
}

function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM kategori WHERE id_kategori = $id");

    return mysqli_affected_rows($connect);
}


if ( hapus($id) > 0 ) {
    echo
    "<script>
        alert('Kategori berhasil dihapus');
        window.location.href = '../';
    </script>";
} else {
     echo
    "<script>
        alert('Kategori gagal dihapus');
        window.location.href = '/';
    </script>";
}



?>