<?php
session_start();

require "Function/index.php";


// $goods = query("SELECT a.*,b.nama AS nama_kategori FROM produk a INNER JOIN kategori b ON a.id_kategori=b.id_kategori");
$query = mysqli_query($connect, "SELECT * FROM users");



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
    .flip-card {
        background-color: transparent;
        width: 190px;
        height: 254px;
        perspective: 1000px;
        font-family: sans-serif;
    }

    .title {
        font-size: 1.5em;
        font-weight: 900;
        text-align: center;
        margin: 0;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2);
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border: 1px solid coral;
        border-radius: 1rem;
    }

    .flip-card-front {
        /* background: linear-gradient(120deg, bisque 60%, rgb(255, 231, 222) 88%, */
        /* rgb(255, 211, 195) 40%, rgba(255, 127, 80, 0.603) 48%); */
        /* color: coral; */
    }

    .flip-card-back {
        /* background: linear-gradient(120deg, rgb(255, 174, 145) 30%, coral 88%, */
        /* bisque 40%, rgb(255, 185, 160) 78%); */
        color: black;
        transform: rotateY(180deg);
    }

    .foto img {
        /* aspect-ratio: 9/16; */
        width: 190px;
        height: 254px;
        border-radius: 2em;
    }

    .button {
        --color: #00A97F;
        padding: 0.8em 1.7em;
        background-color: transparent;
        border-radius: .3em;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: .5s;
        font-weight: 400;
        font-size: 17px;
        border: 1px solid;
        font-family: inherit;
        text-transform: uppercase;
        color: var(--color);
        z-index: 1;
    }

    .button::before,
    .button::after {
        content: '';
        display: block;
        width: 50px;
        height: 50px;
        transform: translate(-50%, -50%);
        position: absolute;
        border-radius: 50%;
        z-index: -1;
        background-color: var(--color);
        transition: 1s ease;
    }

    .button::before {
        top: -1em;
        left: -1em;
    }

    .button::after {
        left: calc(100% + 1em);
        top: calc(100% + 1em);
    }

    .button:hover::before,
    .button:hover::after {
        height: 410px;
        width: 410px;
    }

    .button:hover {
        color: rgb(10, 25, 30);
    }

    .button:active {
        filter: brightness(.8);
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
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Penjual</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <?php while ($user = mysqli_fetch_assoc($query)) :
                ?>
                    <div class="col-md-6 col-lg-2 mb-5 ">
                        <div class="flip-card pe-4">
                            <div class="flip-card-inner">
                                <div class="flip-card-front foto">
                                    <p class="title"><?= $user["username"]; ?></p>
                                </div>
                                <div class="flip-card-back p-2">
                                    <a href="Detail/?id=<?= $user["id_user"]; ?>"  class="button"> Detail
                                    </a>
                                </div>
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