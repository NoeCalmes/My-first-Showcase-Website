<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .footer {
            background-color: #f8f8f8;
            padding: 40px 0;
            text-align: center;
        }

        .footer-logo {
            margin-bottom: 20px;
        }

        .footer-menu {
            margin-bottom: 20px;
        }

        .footer-menu ul {
            list-style: none;
            padding: 0;
        }

        .footer-menu ul li {
            display: inline-block;
            margin: 0 10px;
        }

        .footer-menu ul li a {
            color: #555;
            text-decoration: none;
            font-weight: 500;
        }

        .footer-text-animation {
            font-size: 24px;
            font-weight: bold;
            color: #c8211e;
            margin-bottom: 20px;
        }

        .footer-copyright {
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="footer-logo">
                <img src="your-logo.png" alt="Logo" width="100px">
            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="#">Formations</a></li>
                    <li><a href="#">Code de la route</a></li>
                    <li><a href="#">Documents utiles</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Politique des cookies</a></li>
                </ul>
            </div>
            <div class="footer-text-animation">
                <span id="footer-animation"></span>
            </div>
            <div class="footer-copyright">
                &copy; 2023 Votre entreprise. Tous droits réservés.
            </div>
        </div>
    </footer>

    <script>
        // Animation de texte dans le footer
        const footerText = "Texte animé dans le footer.";
        let charIndex = 0;
        const footerAnimation = document.getElementById('footer-animation');
        setInterval(() => {
            if (charIndex < footerText.length) {
                footerAnimation.textContent += footerText.charAt(charIndex);
                charIndex++;
            }
        }, 100);
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
