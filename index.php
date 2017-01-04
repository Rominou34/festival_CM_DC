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
            <h3>Bienvenue sur le site du festival du court-métrage 2017, organisé par l'ESG Montpellier</h3>
        </div>
        <div id="horloge">
					<h3>Le festival commence dans</h3>
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
            <h3>ne le ratez pas !!!</h3>
        </div>
    </section>

    <section id="festival">
				<h2>Le festival</h2>
				<div class="content">
					<h3>Le festival du court-métrage, qu’est-ce que c’est?</h3>
					<p class="festival-p">
						Le festival du court-métrage est un concours organisé par l’ESG entre des étudiants de l'ESG et
						de Digfital Campus.
						<br/>
						Leur mission ? Réaliser, en un mois et demi, un court-métrage de moins de 8minutes.
						<br/><br/>
						Différentes contraintes leurs sont imposées:<br/>
						- Différentes thématiques ( policier, humour, romantique, horreur, etc. )
						- Deux lieux de tournage
						-La participation obligatoire des membres du personnel administratif et pédagogique de l’école
					</p>

					<h3>Comment sont évalués les courts-métrages ?</h3>
					<p class="festival-p">
						Les cours-métrages sont diffusés lors d’une cérémonie organisée par les étudiants, réunissant plus
						de 200 personnes, dont de nombreux professionnels de l’audiovisuel.
						<br/>
						Au cours de l’édition 2016, le jury était composé d’un ingénieur multimédia, une journaliste,
						une directrice de relations presse et d’un chargé de projets évènementiels.
					</p>
	        <div id="prog">
            <h3>Programme du festival</h3>
						<p style="text-align:center; margin-bottom: 24px">Le festival se déroulera sur le campus de l'École de commerce ESG Montpellier le 9 Janvier de
							14h à 18h.
						</p>
						<p style="text-align:center" id="programme">
							<b>14:00</b> Accueil des invités et préparation des intervenants<br/>
							<b>14:30</b> Projection des courts-métrages<br/>
							<b>16:00</b> Délibération du jury<br/>
							<b>16:30</b> Annonce des vainqueurs et remise des prix<br/>
							<b>17:00</b> Apéritif
						<p>
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
		                                    Hennessy and Sailor Moon
		                                </div>
		                                <div class="project-name">
		                                    Musique
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="javascript:displayVideo(2)" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    Mitchirineko March
		                                </div>
		                                <div class="project-name">
		                                    Musique
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="javascript:displayVideo(3)" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    La chanson de la démonétisation
		                                </div>
		                                <div class="project-name">
		                                    Musique
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="javascript:displayVideo(4)" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    "Modern Peugeot Driver" Adventures
		                                </div>
		                                <div class="project-name">
		                                    Comédie
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="javascript:displayVideo(5)" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    Emu vs Weasel Ball
		                                </div>
		                                <div class="project-name">
		                                    Comédie
		                                </div>
		                            </div>
		                        </div>
		                    </a>
		                </div>
		                <div class="col-lg-4 col-sm-6">
		                    <a href="javascript:displayVideo(6)" class="portfolio-box">
		                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
		                        <div class="portfolio-box-caption">
		                            <div class="portfolio-box-caption-content">
		                                <div class="project-category text-faded">
		                                    The story of Falcon 9
		                                </div>
		                                <div class="project-name">
		                                    Découverte
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
							<p><label for="nom_ins">Nom :</label><br><input type="text" id="nom_ins" name="nom_ins" value="'.stripslashes($nom_ins).'" tabindex="1" /></p>
							<p><label for="prenom_ins">Prénom :</label><br><input type="text" id="prenom_ins" name="prenom_ins" value="'.stripslashes($prenom_ins).'" tabindex="2" /></p>
							<p><label for="email_ins">Email :</label><br><input type="text" id="email" name="email_ins" value="'.stripslashes($email_ins).'" tabindex="3" /></p>
							<p><label for="num_ins">Numéro de téléphone :</label><br><input type="text" id="num_ins" name="num_ins" value="'.stripslashes($num_ins).'" tabindex="4" /></p>
						</fieldset>

						<fieldset><legend>Informations complémentaires</legend>
							<p><label for="nb_personnes" id="nb_pers">Nombre d\'accompagnateurs :</label><input type="number" id="nb_personnes" name="nb_personnes" min="0" max="5" tabindex="5"></p>
							<p><label for="message_ins" id="text_ar">Message ( facultatif ):</label><textarea id="message_ins" name="message_ins" tabindex="6" cols="30" rows="8">'.stripslashes($message_ins).'</textarea></p>
						</fieldset>

						<div style="text-align:center;"><input type="submit" name="envoi_ins" value="Envoyer" /></div>
					</form>' ?>
				</div>
			</div>
    </section>

    <section id="acces">
			<h2>L'accès au festival</h2>
			<div class="content">
				<h3>Plan d'accès à l'école ESG de Montpellier</h3>
        <div id="contact-container">
            <div id="contact-infos">
                <p style="text-align:center">
									<b>Ecole de commerce ESG Montpellier</b>
									<br/>ZAC Port Marianne - Hippocrate
									<br/>349 Rue de la Cavalade
									<br/>34965 Montpellier Cedex 2
								</p>
								<p style="text-align:center">
									<b>Téléphone</b>
									<br/>04 67 91 31 51
								</p>
            </div>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d650.2551587534823!2d3.9122673574390077!3d43.601188066949156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x394e0b6aa6f8cce3!2sDigital+Campus+Montpellier!5e0!3m2!1sfr!2sfr!4v1483450754485" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
				<h3>
					Vous souhaitez plus d'informations ?
					<br/><b>Contactez-nous !</b>
				</h3>
        <?php
				echo '<form id="contact" method="post" action="'.$form_action.'">
					<fieldset>
						<legend>Vos coordonnées</legend>
						<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="7" /></p>
						<p><label for="email">Email :</label><input type="text" id="email" name="email" value="'.stripslashes($email).'" tabindex="8" /></p>
					</fieldset>

					<fieldset><legend>Votre message</legend>
						<p><label for="message">Message :</label><textarea id="message" name="message" tabindex="10" cols="30" rows="8">'.stripslashes($message).'</textarea></p>
					</fieldset>

					<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
				</form>' ?>
			</div>
    </section>

		<!--
		***** DIVS CONTENANT LES VIDEOS *****
		!-->
		<div id="video-container">
			<!-- VIDEO 1 !-->
			<div id="video-1">
				<h3>Hennessy and Sailor Moon</h3>
				<p>
					Produit par le jeune rappeur Suédois Yung Lean, ce clip de Cloud Rap explore son attrait pour l'alcool
					et les films d'animation Japonais.
				</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/5qfP7a9UcuY" frameborder="0" allowfullscreen></iframe>
				<button class="close-button" onclick="closeVideo(this)">✖</button>
				<button class="video-btn-right" onclick="changeVideo(this, 2)">▶</button>
			</div>
			<!-- VIDEO 2 !-->
			<div id="video-2">
				<h3>Mitchirineko March</h3>
				<p>
					Petite fanfare reprenant les personnages du jeu mobile "Mitchirineko".
				</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/lAIGb1lfpBw" frameborder="0" allowfullscreen></iframe>
				<button class="close-button" onclick="closeVideo(this)">✖</button>
				<button class="video-btn-left" onclick="changeVideo(this, 1)">◀</button>
				<button class="video-btn-right" onclick="changeVideo(this, 3)">▶</button>
			</div>
			<!-- VIDEO 3 !-->
			<div id="video-3">
				<h3>La chanson de la démonétisation</h3>
				<p>
					Produit par le très talentueux Maxenss, ce clip vidéo fait ressortir la rage d'un homme par le biais d'un
					texte extrêmement touchant, usant d'un vocabulaire peu familier.
				</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Ng2lqQlRkmA" frameborder="0" allowfullscreen></iframe>
				<button class="close-button" onclick="closeVideo(this)">✖</button>
				<button class="video-btn-left" onclick="changeVideo(this, 2)">◀</button>
				<button class="video-btn-right" onclick="changeVideo(this, 4)">▶</button>
			</div>
			<!-- VIDEO 4 !-->
			<div id="video-4">
				<h3>"Modern Peugeot Driver" Adventures</h3>
				<p>
					Jeremy Clarkson et James May, de l'émission anglaise "Top Gear" s'essayent ici à la vie quotidienne
					des conducteurs de Peugeot.
				</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/9TnGjq9mWSI" frameborder="0" allowfullscreen></iframe>
				<button class="close-button" onclick="closeVideo(this)">✖</button>
				<button class="video-btn-left" onclick="changeVideo(this, 3)">◀</button>
				<button class="video-btn-right" onclick="changeVideo(this, 5)">▶</button>
			</div>
			<!-- VIDEO 5 !-->
			<div id="video-5">
				<h3>Emu vs Weasel Ball</h3>
				<p>
					Incroyable duel sanglant entre les deux plus féroces prédateurs de la savane.
				</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/eHpYBwzlfTc" frameborder="0" allowfullscreen></iframe>
				<button class="close-button" onclick="closeVideo(this)">✖</button>
				<button class="video-btn-left" onclick="changeVideo(this, 4)">◀</button>
				<button class="video-btn-right" onclick="changeVideo(this, 6)">▶</button>
			</div>
			<!-- VIDEO 6 !-->
			<div id="video-6">
				<h3>The story of Falcon 9</h3>
				<p>
					Impressionnante vidéo retraçant l'évolution de la fusée Falcon 9 fe SpaceX jusqu'à sont atterrissage
					sur une barque en Avril dernier.
				</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/tU1b1H2EWU4" frameborder="0" allowfullscreen></iframe>
				<button class="close-button" onclick="closeVideo(this)">✖</button>
				<button class="video-btn-left" onclick="changeVideo(this, 5)">◀</button>
			</div>
		</div>
		<footer>
			<b>Festival du court-métrage 2017</b>
			<br/>ESG Montpellier - Digital Campus Montpellier
		</footer>
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
