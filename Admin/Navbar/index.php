<nav class="navbar navbar-expand-md navbar-light bg-light py-1 mt-0">
        <div class="container-fluid">
            <button class="btn btn-default" id="btn-slider" type="button">
                <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
            </button>
            <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
            <ul class="nav ms-auto">
                <li class="nav-item dropstart">
                    <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <img src="../../assets/images/user/user.png" alt="user" class="img-user">
                    </a>
                    <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                        <div class="d-flex p-3 border-bottom mb-2">
                            <img src="../../assets/images//user/user.png" alt="user" class="img-user me-2">
                            <div class="d-block">
                                <p class="fw-bold m-0 lh-1">YourName</p>
                                <small>YourAccount@gmail.com</small>
                            </div>
                        </div>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="../../index.php">
                            <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>LogOut
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->


    <div class="slider" id="sliders">
        <div class="slider-head">
            <div class="d-block pt-4 pb-3 px-3">
                <img src="../../assets/images//user/user.png" alt="user" class="slider-img-user mb-2">
                <p class="fw-bold mb-0 lh-1 text-white">YourName</p>
                <small class="text-white">YourAccount@gmail.com</small>
            </div>
        </div>
        <div class="slider-body px-1">
            <nav class="nav flex-column ">
                <a class="nav-link px-3 active text-white" href="../home/home.php">
                    <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                </a>
                <a class="nav-link px-3 text-white" href="../profile/profile.php">
                    <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3 text-white" href="../dashboard/dashboard.php">
                    <i class="fa fa-dashboard fa-lg box-icon" aria-hidden="true"></i>Dashboard
                </a>
                <a class="nav-link px-3 text-white" href="../customer/customer.php">
                    <i class="fa fa-users fa-lg box-icon" aria-hidden="true"></i>Customer
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3 text-white" onclick="return confirm('Yakin mau keluar?');" href="../../index.php">
                    <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                </a>
            </nav>
        </div>
    </div>

    <!-- Sidebar end -->