<?php 

require '../../../Function/index.php';

if (isset($_POST["submit"])) {

    if (register($_POST) > 0) {
        echo
        "<script>
                alert('Akun berhasil terbuat');
                window.location.href = '../Login/login.php'
            </script>";
    } else {
        echo mysqli_error($connect);
    }
}


?>