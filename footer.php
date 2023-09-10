<footer class="footer-section">
    <div class="container  footer-container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta d-flex align-items-center">
                        <i class="fas fa-map-marker-alt" style="color: #c8221f;"></i>
                        <div class="cta-text">
                            <h4>Localisation</h4>
                            <a href="https://www.google.com/search?q=Auto+Ecole+Va-Là+Mende" target="_blank"
                                style="color: inherit; text-decoration: none;">
                                <span>16 rue Soubeyran 48000 Mende </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta d-flex align-items-center">
                        <i class="fas fa-phone" style="color: #c8221f;"></i>
                        <div class="cta-text">
                            <h4>Appelez-nous</h4>
                            <a href="tel:+04466651341" style="color: inherit; text-decoration: none;">
                                <span>+04 66 65 13 41</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta d-flex align-items-center">
                        <i class="far fa-envelope-open" style="color: #c8221f;"></i>
                        <div class="cta-text">
                            <h4>Contactez-nous</h4>
                            <a href="mailto:stephane.rouzier0360@orange.fr"
                                style="color: inherit; text-decoration: none;">
                                <span>stephane.rouzier0360@orange.fr</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  ">
        <div class="row">
            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                <div class="footer-menu content-center">
                    <ul class=" d-flex justify-content-center justify-content-lg-start ">
                        <li><a href="index.php">Acceuil</a></li>
                        <li><a href="mention-legales.php">Mentions légales</a></li>
                        <li><a href="contact.php" class="truncated-text">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 text-center text-lg-right ">
                <div class="footer-text ">
                    <p>© 2023, Tous droits réservés <a href="index.php">Auto Ecole Va-Là</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }

    .footer-section {
        background: #151414;
        padding: 50px 0;
        color: white;
        flex-shrink: 0;
    }

    .footer-container {

        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 100px;
    }




    @media (max-width: 768px) {
        .footer-menu ul {
            flex-wrap: wrap;
        }

        .footer-menu li {
            margin-bottom: 5px;
        }

        .footer-container {
            padding: 2px 100px;
        }
    }

    .footer-section {
        background: #151414;
        position: relative;
        padding: 50px 0;
    }

    .footer-cta {
        border-bottom: 1px solid #373636;
        margin-bottom: 30px;
        padding-bottom: 30px;
    }

    .single-cta i {
        font-size: 30px;
        float: left;
        margin-top: 8px;
    }

    .cta-text {
        padding-left: 15px;
        display: inline-block;
    }

    .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .cta-text span {
        color: #757575;
        font-size: 15px;
    }

    .footer-menu ul {
        display: flex;
        justify-content: center;
    }

    .footer-menu li {
        display: inline-block;
        margin-left: 20px;
    }

    .footer-menu li:first-child {
        margin-left: 0;
    }

    .footer-menu li a {
        font-size: 14px;
        color: #878787;
        text-transform: uppercase;
        text-decoration: none;
        white-space: nowrap;
        /* Empêche le texte de se couper sur plusieurs lignes */
        overflow: hidden;
        /* Masque le texte débordant */
        text-overflow: ellipsis;
        /* Ajoute des points de suspension (...) si le texte est tronqué */
    }

    .footer-menu li a:hover {
        color: white;
    }

    .footer-text p {
        margin-bottom: 0;
        font-size: 14px;
        color: #7e7e7e;
        line-height: 28px;
    }

    .footer-text a {
        color: white;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .footer-menu ul {
            justify-content: center;
        }

        .footer-menu li {
            margin-left: 10px;
            margin-right: 10px;
        }
    }
</style>