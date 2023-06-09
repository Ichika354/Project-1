<?php
session_start();

require "Function/index.php";

$goods = mysqli_query($connect, "SELECT * FROM produk");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>IT-STORE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="Assets/Images/6817300.jpg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/style.css" rel="stylesheet" />
</head>

<style>
    .foto {
        width: 220px;
        height: 300px;
    }
    .book {
        position: relative;
        border-radius: 10px;
        width: 220px;
        height: 300px;
        background-color: whitesmoke;
        -webkit-box-shadow: 1px 1px 12px #000;
        box-shadow: 1px 1px 12px #000;
        -webkit-transform: preserve-3d;
        -ms-transform: preserve-3d;
        transform: preserve-3d;
        -webkit-perspective: 2000px;
        perspective: 2000px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #000;
    }

    .cover {
        top: 0;
        position: absolute;
        background-color: lightgray;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        cursor: pointer;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        -webkit-transform-origin: 0;
        -ms-transform-origin: 0;
        transform-origin: 0;
        -webkit-box-shadow: 1px 1px 12px #000;
        box-shadow: 1px 1px 12px #000;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .book:hover .cover {
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        -webkit-transform: rotatey(-80deg);
        -ms-transform: rotatey(-80deg);
        transform: rotatey(-80deg);
    }

    p {
        font-size: 20px;
        font-weight: bolder;
    }
</style>

<body id="page-top">
    <!-- Navigation-->
    <?php include("Seller/Views/Navbar/index.php"); ?>

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5 rounded-circle" src="assets/Images/6817300.jpg" alt="..." />
            <!-- Masthead Heading-->
            <p class="masthead-heading text-uppercase mb-0">Selamat datang di halaman Wirausaha Kami!</p>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Universitas Logistik & Bisnis Internasional</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Produk</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center p-5 ">
                <!-- Portfolio Item 1-->
                <?php while ($user = mysqli_fetch_assoc($goods)) :
                ?>
                    <div class="col-md-6 col-lg-3 mb-5 ">
                        <div class="book">
                            <a href="Detail/?id=<?= $user["id"]; ?>" >
                                <img src="Seller/img/FotoProduk/<?= $user["foto"]; ?>"  alt="" class="foto">
                            </a>
                            <div class="cover">
                                <p><?= $user["nama_produk"]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                ?>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Tentang</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Di sini, kami ingin menginspirasi dan mendukung semangat wirausaha dalam diri Anda. Wirausaha adalah perjalanan penuh tantangan dan peluang, dan kami hadir untuk memberikan informasi, saran, dan sumber daya yang dapat membantu Anda meraih kesuksesan. </p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead"> Melalui halaman ini, kami berkomitmen untuk menyajikan konten yang relevan, inovatif, dan berguna bagi para calon wirausaha, pemilik bisnis, dan para penggiat ekonomi kreatif.</p>
                </div>
            </div>
            <!-- About Section Button-->
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Daftar Sekarang <a href="log/regis/views/">di sini</a></h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->

                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Yayasan Pendidikan Bhakti Pos Indonesia (YPBPI)
                        <br />
                        Jalan Sariasih No. 54 Sarijadi Bandung, 40151, Jawa Barat Indonesia
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Tentang Web</h4>
                    <p class="lead mb-0">
                        Web ini dibuat dengan tujuan memenuhi proyek 1
                        <!-- <a href="http://startbootstrap.com">Start Bootstrap</a> -->
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="Assets/js/script.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>