<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top">HOUSEDRONE</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link" href="Acheter.html">Acheter</a></li>
                <li class="nav-item"><a class="nav-link" href="Deconnexion.php">Deconnexion</a></li>
                <li class="nav-item"><a class="nav-link" href="Profil.php"><?php echo ' Bienvenue ' . $_SESSION['Email'] . ' !' ?> </a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="text-center text-white d-flex masthead" style="background-image:url('assets/img/header.jpg');">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase"><strong>Bienvenue</strong></h1>
                <hr>
            </div>
        </div>
        <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Notre but est de vous permettre d'apercevoir les zones les moins isolé de votre maison, cela grâce a un drone comportant une camera thermique.</p><a class="btn btn-primary btn-xl" role="button" href="#services">En savoir plus</a>
        </div>
    </div>
</header>
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Nos Service</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mx-auto service-box mt-5"><i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                    <h3 class="mb-3">Intervention rapide et fiable</h3>
                    <p class="text-muted mb-0">Nous intervenons chez vous et faisont l'interventions en moins de 45minutes.Puis retrouver votre commande directement sur notre site en moins de 3jours suivant l'interventions</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="p-0">
    <div class="container-fluid p-0">
        <div class="row g-0 popup-gallery">
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/1.jpg" style="width:250px;height:250px;">
                    <img class="img-fluid" src="assets/img/thumbnails/1.jpg" style="width:300px;height:300px;">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/2.jpg"><img class="img-fluid" src="assets/img/thumbnails/2.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/3.jpg"><img class="img-fluid" src="assets/img/thumbnails/3.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/4.jpg"><img class="img-fluid" src="assets/img/thumbnails/4.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/5.jpg"><img class="img-fluid" src="assets/img/thumbnails/5.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/6.jpg"><img class="img-fluid" src="assets/img/thumbnails/6.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>Category</span></div>
                            <div class="project-name"><span>Project Name</span></div>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <h2 class="section-heading">VOUS VOUS POSER DES QUESTION ?</h2>
                <hr class="my-4">
                <p class="mb-5">Notre équipe est à votre disposition pour toute question concernant les interventions et la sécurité</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center ms-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                <p>01 65 48 56 14</p>
            </div>
            <div class="col-lg-4 text-center me-auto"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                <p><a href="mailto:your-email@your-domain.com">HouseDrone@hotmail.fr</a></p>
            </div>
        </div>
    </div>
</section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>

</html>