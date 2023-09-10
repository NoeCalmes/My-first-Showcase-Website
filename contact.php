<!DOCTYPE html>
<html>

<head>
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Auto Ecole Va-là</title>
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<link rel="stylesheet" href="style.css">



</head>

<body>
	<?php include 'navbar.php'; ?>
	<div class="container-contact">
		<div class="contact-box">
			<div class="left">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2844.9090692457844!2d3.4967013774020685!3d44.517015896133834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b36ddf95c99363%3A0x903e931fef5fa12!2zQXV0by3DqWNvbGUgVmEtbMOg!5e0!3m2!1sfr!2sfr!4v1686507321530!5m2!1sfr!2sfr"
					width="100%" height="100%" frameborder="0" style="border 0px;" allowfullscreen=""
					aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="right">
				<h2 id="animated-title">Contactez-nous</h2>
				<p><span class="label">Email de l'entreprise:</span> <a href="mailto:stephane.rouzier0360@orange.fr"
						class="bold-text">stephane.rouzier0360@orange.fr</a></p>
				<p><span class="label">Téléphone de l'entreprise:</span><br><a href="tel:+0466651341"
						class="bold-text">+04 66 65 13 41</a></p>
				</span>
				</p>
				<p><span class="label">Adresse de l'entreprise:</span><br><a href="https://www.google.com/search?q=Auto+Ecole+Va-Là+Mende" target="_blank" class="bold-text">16 rue Soubeyran 48000 Mende</a></p>
				<p><span class="label">Heures d'ouverture:</span><br><span class="bold-text">Lundi - Vendredi, 8:00 -
						12:00 / 14:00 - 19h00 Samedi 8:00 - 12:00</span></p>

			</div>
		</div>
	</div>
	<br>

	
	<footer>
	<?php include 'footer.php'; ?>
	</footer>
</body>

</html>


<link rel="stylesheet" href="style.css">


<style>
	.label {
		font-weight: bold;
	}

	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family: 'Quicksand', sans-serif;

	}

	body {
		height: 100vh;
		width: 100%;
		padding-top: 100px;
	}

	.container-contact {
		position: relative;
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 20px;
		max-width: 1200px;
		/* Ajout de cette ligne */
		margin: 0 auto;
		/* Ajout de cette ligne pour centrer le conteneur */
	}

	.container-contact:after {
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		background: url("img/2081.jpg") no-repeat center;
		background-size: cover;
		filter: blur(78px);
		z-index: -1;
	}

	.contact-box {
		max-width: 850px;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		justify-content: center;
		align-items: center;
		text-align: center;
		background-color: #fff;
		box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);

	}

	.left {

		background-size: cover;
		height: 100%;

		transform-origin: left center;
	}

	.right {
		padding: 25px 40px;
	}

	h2 {
		position: relative;
		padding: 0 0 10px;
		margin-bottom: 10px;
	}

	h2:after {
		content: '';
		position: absolute;
		left: 50%;
		bottom: 0;
		transform: translateX(-50%);
		height: 4px;
		width: 50px;
		border-radius: 2px;
		background-color: #c8221f;
	}

	.field {
		width: 100%;
		border: 2px solid rgba(0, 0, 0, 0);
		outline: none;
		background-color: rgba(230, 230, 230, 0.6);
		padding: 0.5rem 1rem;
		font-size: 1.1rem;
		margin-bottom: 22px;
		transition: .3s;
	}

	.field:hover {
		background-color: rgba(0, 0, 0, 0.1);
	}

	textarea {
		min-height: 150px;
	}



	.field:focus {
		border: 2px solid #c8221f;
		background-color: #fff;
	}

	@media screen and (max-width: 880px) {
		.contact-box {
			grid-template-columns: 1fr;
		}

		.left {
			height: 200px;
		}
	}
</style>

<link rel="stylesheet" href="style.css">