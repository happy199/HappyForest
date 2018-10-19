<!DOCTYPE HTML>

<html>
<head>
    <title>Candidates</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css" />
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
        <a href="<?php echo base_url()?>index.php/users/acceuil" class="logo">MISS INTER UNIVERSITES</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li ><a href="<?php echo base_url()?>index.php/users/acceuil">ACCEUIL</a></li>
            <li class="active"><a href="<?php echo base_url()?>index.php/users/candidates">CANDIDATES</a></li>
            <li ><a href="<?php echo base_url()?>index.php/users/gallery">GALERIE</a></li>
            <li ><a href="<?php echo base_url()?>index.php/users/partenaire">NOS PARTENAIRES</a></li>
        </ul>
        <ul class="icons">
            <li><a href="twitter.com" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="facebook.com" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="instagram.com" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="tel:+22996788852" class="icon alt fa-phone"><span class="label">Phone</span></a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Featured Post -->
        <article class="post featured">
            <header class="major">
                <span class="date">
                    <?php
                    $datetime = date("d-m-Y || H:i:s");
                    echo $datetime;?>
                </span>
                <h2> <FONT COLOR="f5e91b">Bienvenue<br />
                        au</FONT><br  />
                    <FONT COLOR="f5e91b">CONCOURS DE BEAUTE ET D'INTELLIGENCE ESTUDIANTINNE </FONT></a></h2>

                <p><h3>THEME DE LA 4ème EDITION:</h3></p>

                <a style="background-color:#f5e91b" class="button special fit small"><h3>JEUNESSE FEMININE,SCIENCE TECHNOLOGIQUE ET POLITIQUE</h3></a>



            </header>
            <a  class="image main"><img src="<?php echo base_url()?>assets/img/images/pic01.jpg" alt="" /></a>
            <ul class="actions">
                <a style="background-color:#f5e91b" class="button special"><i>LES CANDIDATES</i></a></br>

                </br>Soutenez vos candidates à travers vos  <li>
                    <a class="button special icon fa-thumbs-up " style="border-radius: 50px">J'AIME</a>
                </li>
            </ul>
        </article>

        <!-- Posts -->
        <section class="posts">

            <?php

            foreach ($donnee as $row):



                ?>
                <article>
                    <header>
                        <FONT COLOR="cd9459"><h2><a>CANDIDATE N°<?php echo $row["id_candi"] ;?></FONT></h2><br /><FONT COLOR="cd9459">
                            <h3>ECOLE DE PROVENANCE : <?php echo $row["ecole"] ;?></FONT></a></h3>
                    </header>
                    <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/<?php echo $row['image'] ;?>" alt="" /></a>
                    <p>Info sur la candidate : <?php echo $row['nom'] ;?> <?php echo $row['prenom'] ;?></p>
                    <ul class="actions">
                        <h3><?php echo $row['votes'] ; if ($row['votes']>=2) echo "<label>Votes</label>"; else echo "<label>Vote</label>" ?>  </h3>
                        <li><a id="<?php echo $row['id_candi'] ;?> " style="background-color:#cd9459; border-radius: 100px" class="val button special icon fa-heart-o">J'AIME</a></li><br>
                        <h2> <span></span></h2>
                </article>
            <?php

            endforeach; ?>
            <!-- <article>
                <header>
                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°2</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic03.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="2" name="2" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385" onclick="compteur()">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>
                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°3</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic04.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="3" name="3" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>
                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°4</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic05.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="4" name="4" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>
                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°5</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic06.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="5" name="5" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>
                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°6</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic07.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="6" name="6" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>
                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°7</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic10.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="7" name="7" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>
                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°8</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic11.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="8" name="8" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>
                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°9</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a   class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic12.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="9" name="9" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>

                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°10</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic13.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="10" name="10" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>

                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°11</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic14.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="11" name="11" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            <article>
                <header>

                    <FONT COLOR="cd9459"><h2><a>CANDIDATE N°12</FONT></h2><br /><FONT COLOR="cd9459">
                        <h3>(ECOLE DE PROVENANCE)</FONT></a></h3>
                </header>
                <a  class="image fit"><img src="<?php echo base_url()?>assets/img/images/pic15.jpg" alt="" /></a>
                <p>Info sur la candidate</p>
                <ul class="actions">
                    <li><a id="12" name="12" style="background-color:#cd9459; border-radius: 100px" href="#" class="button special icon fa-thumbs-up" style="font-size:30px; color:#295385">J'AIME</a></li><br>
                    <span></span></a>
                </ul>
            </article>
            -->
        </section>


    </div>

    <!-- Footer -->
    <footer id="footer">
        <section>
            <form method="post" action="#">
                <div class="field">
                    <label for="name">Nom</label>
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
                    <li><input type="submit" value="Envoyer le Message" /></li>
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
                <p><a href="tel:+22995747682,tel:+22996788852">(229) 95747682/96788852 </a></p>
            </section>
            <section>
                <h3>Email</h3>
                <p><a href="mailto:adegroup20171@gmail.com">adegroup20171@gmail.com</a></p>
            </section>
            <section>
                <h3>Social</h3>
                <ul class="icons alt">
                    <li><a href="twitter.com" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="facebook.com" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="instagram.com" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="tel:+22996788852" class="icon alt fa-phone"><span class="label">Phone</span></a></li>
                </ul>
            </section>
        </section>
    </footer>

    <!-- Copyright -->
    <div id="copyright">
        <FONT COLOR="FFFFFF"><ul><li>&copy; All rights reserved MISS INTER UNIVERSITES</li><li>Design: <a>RIF OLS & HAPPY LAB</a></li></ul></FONT>
    </div>

</div>


<!-- Scripts -->
            <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
            <script src="<?php echo base_url()?>assets/js/jquery.scrollex.min.js"></script>
            <script src="<?php echo base_url()?>assets/js/jquery.scrolly.min.js"></script>
            <script src="<?php echo base_url()?>assets/js/skel.min.js"></script>
            <script src="<?php echo base_url()?>assets/js/util.js"></script>
            <script src="<?php echo base_url()?>assets/js/main.js"></script>
<script type="text/javascript">
    var base_url="<?php echo base_url()?>";
    var nbclic1=0;
    var nbclicmax1=1;
    $(".val").click(function () {
        nbclic1++
        var id = $(this).attr("id");
        console.log(id);
//        adresse = java.net.InetAddress.getLocalHost();
//
//        ip = adresse.getHostAddress();

        var ipp=0;
        $.getJSON("https://api.ipify.org?format=jsonp&callback=?",
            function(json) {
            json.mac
                window.location=base_url+"users/save_vote/"+json.ip+"/"+id;
            }
        );

    });
</script>
<!--<script type="text/javascript">-->
<!--    var nbclic2=0;-->
<!--    var nbclicmax2=1;-->
<!--    function compteur2() {-->
<!--        nbclic2++-->
<!--        var affiche2 = document.getElementById("aff2")-->
<!--        affiche2.innerHTML = nbclic2;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic3=0;-->
<!--    var nbclicmax3=1;-->
<!--    function compteur3() {-->
<!--        nbclic3++-->
<!--        var affiche3 = document.getElementById("aff3")-->
<!--        affiche3.innerHTML = nbclic3;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic4=0;-->
<!--    var nbclicmax4=1;-->
<!--    function compteur4() {-->
<!--        nbclic4++-->
<!--        var affiche4 = document.getElementById("aff4")-->
<!--        affiche4.innerHTML = nbclic4;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic5=0;-->
<!--    var nbclicmax5=1;-->
<!--    function compteur5() {-->
<!--        nbclic5++-->
<!--        var affiche5 = document.getElementById("aff5")-->
<!--        affiche5.innerHTML = nbclic5;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic6=0;-->
<!--    var nbclicmax6=1;-->
<!--    function compteur6() {-->
<!--        nbclic6++-->
<!--        var affiche6 = document.getElementById("aff6")-->
<!--        affiche6.innerHTML = nbclic6;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic7=0;-->
<!--    var nbclicmax7=1;-->
<!--    function compteur7() {-->
<!--        nbclic7++-->
<!--        var affiche7 = document.getElementById("aff7")-->
<!--        affiche7.innerHTML = nbclic7;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic8=0;-->
<!--    var nbclicmax8=1;-->
<!--    function compteur8() {-->
<!--        nbclic8++-->
<!--        var affiche8 = document.getElementById("aff8")-->
<!--        affiche8.innerHTML = nbclic8;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic9=0;-->
<!--    var nbclicmax9=1;-->
<!--    function compteur9() {-->
<!--        nbclic9++-->
<!--        var affiche9 = document.getElementById("aff9")-->
<!--        affiche9.innerHTML = nbclic9;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic10=0;-->
<!--    var nbclicmax10=1;-->
<!--    function compteur10() {-->
<!--        nbclic10++-->
<!--        var affiche10 = document.getElementById("aff10")-->
<!--        affiche10.innerHTML = nbclic10;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic11=0;-->
<!--    var nbclicmax11=1;-->
<!--    function compteur11() {-->
<!--        nbclic11++-->
<!--        var affiche11 = document.getElementById("aff11")-->
<!--        affiche11.innerHTML = nbclic11;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic12=0;-->
<!--    var nbclicmax12=1;-->
<!--    function compteur12() {-->
<!--        nbclic12++-->
<!--        var affiche12 = document.getElementById("aff12")-->
<!--        affiche12.innerHTML = nbclic12;-->
<!--    }-->
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    var nbclic13=0;-->
<!--    var nbclicmax13=1;-->
<!--    function compteur13() {-->
<!--        nbclic13++-->
<!--        var affiche13 = document.getElementById("aff13")-->
<!--        affiche13.innerHTML = nbclic13;-->
<!--    }-->
<!--</script>-->
</body>
</html>