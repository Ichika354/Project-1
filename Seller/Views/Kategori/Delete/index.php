<?php 

require '../../../../Function/index.php';

function hapus($id) {
    global $connect;
    mysqli_query($connect, "DELETE FROM kategori WHERE id_kategori = $id");

    return mysqli_affected_rows($connect);
}

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
    echo
    "<script>
        alert('Data berhasil dihapus');
        window.location.href = '../';
    </script>";
} else {
     echo
    "<script>
        alert('Data gagal dihapus');
        window.location.href = '/';
    </script>";
}



?>