
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Auto Ecole Va-là </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



</head>

<body>

    <nav>
        <div id="overlay"></div>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <a href="tel:0466651341"><i class="fas fa-phone phone-icon small-icon icon-bg"></i></a>
            <a href="index.php">
                <div class="logo">
                    <img src="img/logo.png" alt="Logo">
            </a>
        </div>

        <div class="nav-links">
            <div class="sidebar-logo">
                <img src="img/logo.png" alt="Logo" style="height:70px; width:auto;">
                <i class='bx bx-x'></i>
            </div>

            <ul class="links">
                <li class="nav-item-large"><a href="index.php">ACCEUIL</a></li>
                <li class="nav-item-large">
                    <a href="#">NOS FORMATIONS</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="permis-b.php">Permis B</a></li>
                        <li><a href="conduite-accompagne.php">Conduite Accompagnée</a></li>
                        <li><a href="permis-moto.php">Permis Moto</a></li>
                        <li><a href="permis-am.php">Permis AM</a></li>
                        <li><a href="permis-125.php">Permis 125</a></li>
                        <li><a href="permis-remorque.php">Permis Remorque</a></li>
                    </ul>
                </li>
                <li class="nav-item-large"><a href="code_de_la_route.php">CODE DE LA ROUTE</a></li>
                <li class="nav-item-large"><a href="nos_engagements.php">NOS ENGAGEMENTS</a></li>
                <li class="nav-item-large">
                    <a href="#">DOCUMENTS UTILES</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="documents-utiles/reglement-interieur.php">Règlement Intérieur</a></li>
                        <li><a href="documents-utiles/piste-moto.php">Piste Moto</a></li>
                        <li><a href="documents-utiles/procede-evaluation.php">Procédé d'évaluation</a>
                        </li>
                        <li><a href="documents-utiles/procede-de-postionnement.php">Procédé positionnement</a></li>
                    </ul>
                </li>
                <li class="nav-item-large"><a href="contact.php">CONTACT</a></li>

            </ul>
        </div>

        </div>
        </div>
    </nav>
    <style>
        /* Googlefont Poppins CDN Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            padding-top: 70px;


        }

        .scrolled {
            border-bottom: 3.2px solid #c8211e !important;
        }

        .logo img {
            max-width: 120px;
            /* Ajustez cette valeur selon la taille souhaitée pour votre logo */
            display: block;
            margin: auto;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            height: 70px;
            background: white;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            z-index: 99;
            /* Ajoute une bordure de 3px en rouge au bas */
        }

        @media screen and (min-width: 1280px) {
            .nav-item-large {
                transform: scale(1.1);
                /* Ajustez le facteur d'échelle selon vos besoins */
                margin-right: 10px;
            }


        }



        nav .navbar {
            height: 100%;
            max-width: 1250px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: auto;
            /* background: red; */
            padding: 0 50px;
        }

        .navbar .logo a {
            font-size: 30px;
            color: black;
            text-decoration: none;
            font-weight: 600;
        }


        nav .navbar .nav-links {
            line-height: 70px;
            height: 100%;
        }

        nav .navbar .links {
            display: flex;
        }

        nav .navbar .links li {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            list-style: none;
            padding: 0 14px;
        }

        nav .navbar .links li a {
            height: 100%;
            text-decoration: none;
            white-space: nowrap;
            color: #56534e;
            font-size: 15px;
            font-weight: 500;
        }

        nav .navbar .links li a:hover {
            color: #c8221f;
        }




        .links li:hover .htmlcss-arrow,
        .links li:hover .js-arrow {
            transform: rotate(180deg);
        }

        nav .navbar .links li .arrow {
            /* background: red; */
            height: 100%;
            width: 22px;
            line-height: 70px;
            text-align: center;
            display: inline-block;
            color: black;
            transition: all 0.3s ease;
        }


        nav .navbar .links li .sub-menu {
            position: absolute;
            top: 70px;
            left: 0;
            line-height: 40px;
            background: white;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            border-radius: 0 0 4px 4px;
            display: none;
            z-index: 2;
        }

        nav .navbar .links li:hover .htmlCss-sub-menu,
        nav .navbar .links li:hover .js-sub-menu {
            display: block;
        }



        .navbar .links li .sub-menu li {
            padding: 0 22px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            
        }

        .navbar .links li .sub-menu a {
            color: black;
            font-size: 15px;
            font-weight: 500;
        }

        .navbar .links li .sub-menu .more-arrow {
            line-height: 40px;
        }

        .navbar .links li .htmlCss-more-sub-menu {
            /* line-height: 40px; */
        }

        .navbar .links li .sub-menu .more-sub-menu {
            position: absolute;
            top: 0;
            left: 100%;
            border-radius: 0 4px 4px 4px;
            z-index: 1;
            display: none;
        }

        .links li .sub-menu .more:hover .more-sub-menu {
            display: block;
        }

        .navbar .search-box {
            position: relative;
            height: 40px;
            width: 40px;
        }



        .navbar .nav-links .sidebar-logo {
            display: none;

        }

        .navbar .bx-menu {
            display: none;
        }


        @media (max-width:1126px) {


            nav {
                /* position: relative; */
            }

            .navbar .bx-menu {
                display: block;
                font-size: 35px !important;

            }


            .navbar {
                flex-direction: row-reverse;
                align-items: center;
                display: flex;
                position: relative;
            }

            .logo {
                flex: 1;
                text-align: center;
                position: absolute;
                left: 50%;
                transform: translateX(-50%)
            }

            .logo img {
                max-width: 120px;
                display: inline-block;
                vertical-align: middle;
                /* Centrer verticalement l'image */
            }

            nav .navbar .nav-links {
                position: fixed;
                top: 0;
                left: -100%;
                display: block;
                max-width: 270px;
                width: 100%;
                background: white;
                line-height: 40px;
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                transition: all 0.5s ease;
                z-index: 1000;
            }

            .navbar .nav-links .sidebar-logo {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .sidebar-logo .logo-name {
                font-size: 25px;
                color: #fff;
            }

            .sidebar-logo i,
            .navbar .bx-menu {
                font-size: 25px;
                color: black;
            }

            nav .navbar .links {
                display: block;
                margin-top: 20px;
            }

            nav .navbar .links li .arrow {
                line-height: 40px;
            }

            nav .navbar .links li {
                display: block;
            }

            nav .navbar .links li .sub-menu {
                position: relative;
                top: 0;
                box-shadow: none;
                display: none;
            }

            nav .navbar .links li .sub-menu li {
                border-bottom: none;

            }

            .navbar .links li .sub-menu .more-sub-menu {
                display: none;
                position: relative;
                left: 0;
            }

            .navbar .links li .sub-menu .more-sub-menu li {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .links li:hover .htmlcss-arrow,
            .links li:hover .js-arrow {
                transform: rotate(0deg);
            }

            .navbar .links li .sub-menu .more-sub-menu {
                display: none;
            }

            .navbar .links li .sub-menu .more span {
                /* background: red; */
                display: flex;
                align-items: center;
                /* justify-content: space-between; */
            }

            .links li .sub-menu .more:hover .more-sub-menu {
                display: none;
            }

            nav .navbar .links li:hover .htmlCss-sub-menu,
            nav .navbar .links li:hover .js-sub-menu {
                display: none;
            }

            .navbar .nav-links.show1 .links .htmlCss-sub-menu,
            .navbar .nav-links.show3 .links .js-sub-menu,
            .navbar .nav-links.show2 .links .more .more-sub-menu {
                display: block;
            }

            .navbar .nav-links.show1 .links .htmlcss-arrow,
            .navbar .nav-links.show3 .links .js-arrow {
                transform: rotate(180deg);
            }

            .navbar .nav-l inks.show2 .links .more-arrow {
                transform: rotate(90deg);
            }
        }

        @media (max-width:370px) {
            nav .navbar .nav-links {
                max-width: 100%;
            }
        }

        ::selection {
            background-color: #c8211e;
            color: white;
        }

        /* icon telephone mobile */
        .phone-icon {
            display: none;
            color: white;
            position: absolute;
            left: 35px;
            top: 50%;
            /* Centrage vertical */
            transform: translateY(-50%);
            /* Ajustement pour le centrage vertical */
            padding: 12px;
            background-color: #c8211e;
            border-radius: 50%;
            font-size: 16px !important;
        }



        @media (max-width: 1126px) {
            .phone-icon {
                display: block;

            }
        }


        /* overlay noir pour la navbar mobile */
        #overlay {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }
    </style>
    <script>
        window.addEventListener("scroll", function () {
            var nav = document.querySelector("nav");
            nav.classList.toggle('scrolled', window.scrollY > 0);
        });



        let navLinks = document.querySelector(".nav-links");
        let menuOpenBtn = document.querySelector(".navbar .bx-menu");
        let menuCloseBtn = document.querySelector(".nav-links .bx-x");

        menuOpenBtn.onclick = function () {
            navLinks.style.left = "0";
        }

        menuCloseBtn.onclick = function () {
            navLinks.style.left = "-100%";
        }

        // sidebar submenu open close js code
        let htmlcssArrow = document.querySelector(".htmlcss-arrow");
        let jsArrow = document.querySelector(".js-arrow");

        htmlcssArrow.onclick = function () {
            navLinks.classList.toggle("show1");
        }

        jsArrow.onclick = function () {
            navLinks.classList.toggle("show3");
        }

        //clique en dehors de la barre de nav elle se ferme en mode mobile
        document.addEventListener('click', function (event) {
            var isClickInsideNav = navLinks.contains(event.target);
            var isClickInsideMenu = menuOpenBtn.contains(event.target);

            if (!isClickInsideNav && !isClickInsideMenu) {
                navLinks.style.left = "-100%";
            }
        });

        /* overlay noir pour la navbar mobile */
        let overlay = document.getElementById("overlay");

        menuOpenBtn.onclick = function () {
            navLinks.style.left = "0";
            overlay.style.display = "block";  // affiche l'overlay quand le menu est ouvert
        }

        menuCloseBtn.onclick = function () {
            navLinks.style.left = "-100%";
            overlay.style.display = "none";  // cache l'overlay quand le menu est fermé
        }

        overlay.onclick = function () {
            navLinks.style.left = "-100%";
            overlay.style.display = "none";  // cache l'overlay quand l'utilisateur clique dessus
        }



    </script>

</body>

</html>