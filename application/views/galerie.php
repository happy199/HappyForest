<!DOCTYPE HTML>

<html>
<head>
    <title>Notre Gallery</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/owlcarousel/assets/owlcaroussel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" />
    <noscript><link rel="stylesheet" href="<?php echo base_url()?>assets/css/noscript.css" /></noscript>
</head>

<body class="is-loading">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
        <h1>MISS INTER<br />
            UNIVERSITES</h1>

        <ul class="actions">
            <li><a href="#header" class="button icon solo fa-arrow-down scrolly">CONTINUER</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="<?php echo base_url()?>index.php/users/gallery" class="logo">MISS INTER UNIVERSITES</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li ><a href="<?php echo base_url()?>index.php/users/acceuil">ACCEUIL</a></li>
            <li ><a href="<?php echo base_url()?>index.php/users/candidates">CANDIDATES</a></li>
            <li class="active"><a href="<?php echo base_url()?>index.php/users/gallery">GALERIE</a></li>
            <li ><a href="<?php echo base_url()?>index.php/users/partenaire">NOS PARTENAIRES</a></li>
        </ul>
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="tel:+22996788852" class="icon alt fa-phone"><span class="label">Phone</span></a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <section class="post">
            <header class="major">
                <span class="date">
                    <?php
                    $datetime = date("d-m-Y || H:i:s");
                    echo $datetime;?>
                </span>
                <h1>NOTRE<br />
                    GALERIE</h1>
                <p>Les momennts fort de MISS INTER UNIVERSITES.</p>
            </header>
            <div class="image main"><img src="<?php echo base_url()?>assets/img/images/pic1bb.jpg" alt="" /></div>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/images/pic1bb.jpg?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic02.jpg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic03.jpg?auto=yes&bg=555&fg=333&text=Forth slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic04.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic05.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic06.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic07.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic10.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic11.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic12.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic13.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic14.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url()?>assets/img/GALERIE/pic15.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer id="footer">
        <section>
            <form method="post" action="#">
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="3"></textarea>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message" /></li>
                </ul>
            </form>
        </section>
        <section class="split contact">
            <section class="alt">
                <h3>Address</h3>
                <p>SCOA-GBETO LOT 325<br />
                    Maison AYIVI Joseph</p>
            </section>
            <section>
                <h3>Phone</h3>
                <p><a href="#">(229) 95747682/96788852 </a></p>
            </section>
            <section>
                <h3>Email</h3>
                <p><a href="#">adegroup20171@gmail.com</a></p>
            </section>
            <section>
                <h3>Social</h3>
                <ul class="icons alt">
                    <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="tel:+22996788852" class="icon alt fa-phone"><span class="label">Phone</span></a></li>
                </ul>
            </section>
        </section>
    </footer>

    <!-- Copyright -->
    <div id="copyright">
        <FONT COLOR="FFFFFF"><ul><li>&copy; All rights reserved MISS INTER UNIVERSITES</li><li>Design: <a>RIF OLS</a></li></ul></FONT>
    </div>

</div>

            <!-- Scripts -->
            <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
            <script src="<?php echo base_url()?>assets/js/jquery.scrollex.min.js"></script>
            <script src="<?php echo base_url()?>assets/js/jquery.scrolly.min.js"></script>
            <script src="<?php echo base_url()?>assets/js/skel.min.js"></script>
            <script src="<?php echo base_url()?>assets/js/util.js"></script>
            <script src="<?php echo base_url()?>assets/js/main.js"></script>
<script src="<?php echo base_url()?>assets/owlcarousel/owlcarousel.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 3000
        })

    });
</script>
</body>
</html>