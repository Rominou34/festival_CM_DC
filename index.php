<?php
include('formulaires.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Festival du court-metrage</title>
</head>

<body>
    <header>
	<div class="link-container">
		<a data-scroll href="#festival">Le festival</a>
		<a data-scroll href="#CM">Les courts metrages</a>
	</div>
	<div>
		<a data-scroll href="#">
			<img src="img/logo.png" alt="Logo du festival" id="logo">
		</a>
	</div>
	<div class="link-container">
		<a data-scroll href="#inscription">Inscription</a>
		<a data-scroll href="#acces">Accès</a>
	</div>
    </header>

    <section id="accueil">
			<div class="content">
        <div id="intro">
            <p> Bienvenue </p>
        </div>
        <div id="horloge">
            <div id="countdown">
                <div>
                    <span class="days"></span>
                    <div class="smalltext">Jours</div>
                </div>
                <div>
                    <span class="hours"></span>
                    <div class="smalltext">Heures</div>
                </div>
                <div>
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div>
                    <span class="seconds"></span>
                    <div class="smalltext">Secondes</div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br>
        </div>
    </section>

    <section id="festival">
				<h2>Le festival</h2>
				<div class="content">
	        <div id="prog">
	            <p> Programme du festival</p>
	        </div>
				</div>
    </section>

    <section id="CM">
			<h2>Les courts-métrages</h2>
			<div class="content">
				<section class="no-padding" id="portfolio">
		        <div class="container-fluid">
		            <div class="row no-gutter popup-gallery">
		                <div class="col-lg-4 col-sm-6">
		                    <a href="javascript:displayVideo(1)" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    Category
		                                </div>
		                                <div class="project-name">
		                                    Project Name
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    Category
		                                </div>
		                                <div class="project-name">
		                                    Project Name
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    Category
		                                </div>
		                                <div class="project-name">
		                                    Project Name
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    Category
		                                </div>
		                                <div class="project-name">
		                                    Project Name
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    Category
		                                </div>
		                                <div class="project-name">
		                                    Project Name
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    Category
		                                </div>
		                                <div class="project-name">
		                                    Project Name
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		            </div>
		        </div>
		    </section>
			</div>
    </section>

		<section id="inscription">
			<h2>Formulaire d'inscription</h2>
			<div class="content">
				<div>
					<?php
					echo '<form id="inscription_form" method="post" action="'.$form_action.'">
						<fieldset>
							<legend>Vos coordonnées</legend>
							<p><label for="nom_ins">Nom :</label><input type="text" id="nom_ins" name="nom_ins" value="'.stripslashes($nom_ins).'" tabindex="1" /></p>
							<p><label for="prenom_ins">Prénom :</label><input type="text" id="prenom_ins" name="prenom_ins" value="'.stripslashes($prenom_ins).'" tabindex="2" /></p>
							<p><label for="email_ins">Email :</label><input type="text" id="email" name="email_ins" value="'.stripslashes($email_ins).'" tabindex="3" /></p>
							<p><label for="num_ins">Numéro de téléphone :</label><input type="text" id="num_ins" name="num_ins" value="'.stripslashes($num_ins).'" tabindex="4" /></p>
						</fieldset>

						<fieldset><legend>Informations complémentaires</legend>
							<p><label for="nb_personnes">Nombre de personnes vous accompagnant :</label><input type="number" id="nb_personnes" name="nb_personnes" min="0" max="5" tabindex="5"></p>
							<p><label for="message_ins">Message ( facultatif ):</label><textarea id="message_ins" name="message_ins" tabindex="6" cols="30" rows="8">'.stripslashes($message_ins).'</textarea></p>
						</fieldset>

						<div style="text-align:center;"><input type="submit" name="envoi_ins" value="Envoyer" /></div>
					</form>' ?>
				</div>
			</div>
    </section>

    <section id="acces">
			<h2>L'accès au festival</h2>
			<div class="content">
                            <div>
                                <div id="contact-infos">
                                    Numéro de tel
                                    <br/>Blabla
                                </div>
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d650.2551587534823!2d3.9122673574390077!3d43.601188066949156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x394e0b6aa6f8cce3!2sDigital+Campus+Montpellier!5e0!3m2!1sfr!2sfr!4v1483450754485" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <?php
				echo '<form id="contact" method="post" action="'.$form_action.'">
					<fieldset>
						<legend>Vos coordonnées</legend>
						<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" /></p>
						<p><label for="email">Email :</label><input type="text" id="email" name="email" value="'.stripslashes($email).'" tabindex="2" /></p>
					</fieldset>

					<fieldset><legend>Votre message</legend>
						<p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" /></p>
						<p><label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="30" rows="8">'.stripslashes($message).'</textarea></p>
					</fieldset>

					<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
				</form>' ?>
			</div>
    </section>

		<!--
		***** DIVS CONTENANT LES VIDEOS *****
		!-->
		<div id="video-container">
			<div id="video-1">
				<h3>Premiere video</h3>
				<p>Description de la video.</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/lAIGb1lfpBw" frameborder="0" allowfullscreen></iframe>
				<div class="close-button">✖</div>
			</div>
		</div>
		<script src="scripts.js"></script>
                <script src="smoothScroll.js"></script>
                <script>
                    smoothScroll.init({
                        selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
                        selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
                        speed: 500, // Integer. How fast to complete the scroll in milliseconds
                        easing: 'easeInOutCubic', // Easing pattern to use
                        offset: 90, // Integer. How far to offset the scrolling anchor location in pixels
                        callback: function ( anchor, toggle ) {} // Function to run after scrolling
                    });
                </script>
</body>
</html>
