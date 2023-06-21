<?php
// session_start();


$npm = $_SESSION["user"];
$queryUser = mysqli_query($connect, "SELECT * FROM users WHERE npm = '$npm'");
$profile = mysqli_fetch_assoc($queryUser);


?>

<!-- Sidebar -->
<div class="slider" id="sliders">
    <div class="slider-head">
        <div class="d-block pt-4 pb-3 px-3">
            <p class="fw-bold mb-0 lh-1 text-white"><?= $profile["username"] ?></p>
            <small class="text-white"><?= $profile["no_telp"]; ?></small>
        </div>
    </div>
    <div class="slider-body px-1">
        <nav class="nav flex-column ">
            <a class="nav-link px-3 text-white" href="../../../../../Project-ULBI/Project-1/Seller/">
                <i class="fa fa-dashboard fa-lg box-icon" aria-hidden="true"></i>Dashboard
            </a>
            <a class="nav-link px-3 text-white" href="../../../../../Project-ULBI/Project-1/Seller/Views/Profile/">
                <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
            </a>
            <hr class="soft my-1 bg-white">
            <a class="nav-link px-3 active text-white" href="../../../../../Project-ULBI/Project-1/Seller/Views/Kategori/">
                <i class="fa fa-list fa-lg box-icon" aria-hidden="true"></i>Kategori
            </a>
            <a class="nav-link px-3 text-white" href="../../../../../Project-ULBI/Project-1/Seller/Views/Produk/">
                <i class="fa fa-box fa-lg box-icon" aria-hidden="true"></i>Produk
            </a>
            <hr class="soft my-1 bg-white">
            <a class="nav-link px-3 text-white" onclick="return confirm('Yakin mau keluar?');" href="../../../../../Project-ULBI/Project-1/log/logout/">
                <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
            </a>
        </nav>
    </div>
</div>

<!-- Sidebar end -->