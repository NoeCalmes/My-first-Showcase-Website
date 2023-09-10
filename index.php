<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Ecole Va-là</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap">

</head>

<body>

</body>

</html>
<script>
    function scrollToFormations() {
        var formationsSection = document.getElementById("formations");
        var currentPosition = formationsSection.offsetTop;  // Position actuelle de la section des formations
        var targetPosition = currentPosition - 74;  // Nouvelle position 50px plus haut que la position actuelle
        window.scrollTo({
            top: targetPosition,
            behavior: "smooth"
        });
    }


    $(document).ready(function () {
        $(".scroll-to-about").click(function (event) {
            event.preventDefault();
            var aboutSection = $("#about");
            var currentPosition = aboutSection.offset().top;
            var targetPosition = currentPosition - 70;
            $('html, body').animate({
                scrollTop: targetPosition
            }, 800);
        });
    });


    // avis google visible que en scroll

    $(window).scroll(function () {
        var scrollPosition = $(window).scrollTop();
        var reviewsOffset = $('#google-reviews').offset().top - 100; // Ajustez cette valeur à l'endroit où vous voulez que les avis apparaissent

        if (scrollPosition >= reviewsOffset) {
            $('#google-reviews').addClass('visible');
        } else {
            $('#google-reviews').removeClass('visible');
        }
    });

</script>
</head>

<body>
    <!-- google avis debut-->
    <div id="google-reviews">
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-baad8058-97cf-45f8-8eb3-07c4e853d5b5"></div>
    </div>
    <!-- google avis fin -->

    <?php include 'navbar.php'; ?>


    <div class="img">
        <a href="#about" class="scroll-to-about">

            <i class="fas fa-chevron-down"></i>
        </a>

    </div>

    <div class="center">
        <div class="title fade-in">Auto école</div>
        <div class="sub_title fade-in">Va-là</div>
        <div class="btns">
            <a href="contact.php">
                <button class="btn contact">Contact<span></span></button>
            </a>
            <button class="btn savoir" onclick="scrollToFormations()">En savoir plus</button>
        </div>
    </div>


    <!-- About End -->
    <section class="lap section_all bg-white" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title_all text-center">
                        <div class="">
                            <i class=""></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row vertical_content_manage mt-5">
                <div class="col-lg-6">
                    <div class="about_header_main mt-3">
                        <div class="about_icon_box">
                            <div class="section-tt col-sm-12">
                                <h4>Qui sommes <span> nous ?</span></h4>
                            </div>
                        </div>
                        <h4 class="about_heading e font-weight-bold mt-4">L’Auto-école Va-là est un centre de
                            formation
                            de conducteurs de véhicules à moteurs.</h4>
                        <p class="text-muted mt-3">L’auto-école est implantée à Mende depuis maintenant une
                            vingtaine
                            d’années et a toujours su faire de son mieux pour préparer ses élèves aux examens dans
                            les
                            meilleures conditions possibles.</p>
                        <p class="text-muted">Notre équipe est constituée de sept moniteurs diplômés et d’une
                            secrétaire
                            au bureau.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_about mt-3">
                        <img src="img/local123.png" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- 3 card debut -->
    <section class="section_all bg-light" id="formations">
        <div class="container">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Voici les formations que nous pouvons</span> dispenser :</h4>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-car"></i></span>
                        <h6>Permis B</h6>
                        <p>Permis B et des filières AAC, code 78</p>
                        <a href="permis-b.php">
                            <button class="btn-en-savoir-plus" id="scrollToFormations">En savoir plus</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-motorcycle"></i></span>
                        <h6>Permis Moto</h6>
                        <p>Permis Moto (AM, A1, A2, A)</p>
                        <a href="permis-moto.php">
                            <button class="btn-en-savoir-plus">En savoir plus</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-truck"></i></span>
                        <h6>Permis Remorque</h6>
                        <p>Permis Remorques (B96, BE)</p>
                        <a href="permis-remorque.php">
                            <button class="btn-en-savoir-plus">En savoir plus</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-head col-sm-12">
        <p class="uir"> Des formations post permis telles que le perfectionnement de la conduite, la
            formation
            sur simulateur de chaussée glissante.</p>
        <p>Depuis quelques années, pour être toujours plus accessibles à tous, nous avons décidé de créer un
            auto-école près de la gare. L’auto-école top conduite, qui facilite l’accès à ses locaux aux
            jeunes étudiants des établissements voisins (lycée Notre-Dame, lycée chaptal et collège
            bourillon).</p>
        <p>De plus, pour être toujours plus efficace, qualitative, soucieuse de
                l’environnement et du bien être de ses élèves  , <U>l’auto école s’est engagée dans trois
            démarches
            qualité (Qualiopi, datadock et label école de conduite qualité) et dans la transition de son
                parc de véhicule.</U></p>
    </div>

    </div>
    </div>






    <?php include 'footer.php'; ?>

</body>

</html>