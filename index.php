<?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'arnaud.romain34@gmail.com';

// copie ? (envoie une copie au visiteur)
$copie = 'oui';

// Action du formulaire (si votre page a des paramètres dans l'URL)
// si cette page est index.php?page=contact alors mettez index.php?page=contact
// sinon, laissez vide
$form_action = '';

// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/

/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}

	$text = nl2br($text);
	return $text;
};

/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}

// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
	if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
		//$headers .= 'Reply-To: '.$email. "\r\n" ;
		//$headers .= 'X-Mailer:PHP/'.phpversion();

		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.';'.$email;
		}
		else
		{
			$cible = $destinataire;
		};

		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('&lt;br&gt;','',$message);
		$message = str_replace('&lt;br /&gt;','',$message);
		$message = str_replace("&lt;","&lt;",$message);
		$message = str_replace("&gt;","&gt;",$message);
		$message = str_replace("&amp;","&",$message);

		// Envoi du mail
		$num_emails = 0;
		$tmp = explode(';', $cible);
		foreach($tmp as $email_destinataire)
		{
			if (mail($email_destinataire, $objet, $message, $headers))
				$num_emails++;
		}

		if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
		{
			echo '<p>'.$message_envoye.'</p>';
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>';
		};
	}
	else
	{
		// une des 3 variables (ou plus) est vide ...
		echo '<p>'.$message_formulaire_invalide.'</p>';
		$err_formulaire = true;
	};
}; // fin du if (!isset($_POST['envoi']))
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Festival du court-metrage</title>
</head>

<body>
    <header>
	<div class="link-container">
		<a href="#festival">Le festival</a>
		<a href="#CM">Les courts metrages</a>
	</div>
	<div>
		<a href="#">
			<img src="img/logo.png" alt="Logo du festival" id="logo">
		</a>
	</div>
	<div class="link-container">
		<a href="#inscription">Inscription</a>
		<a href="#acces">Accès</a>
	</div>
    </header>

    <section id="accueil">
			<div class="content">
        <div id="intro">
            <p> Bienvenue </p>
        </div>
        <div id="compteur">
            <p> Le compteur ici </p>
            <!-- contenu !-->
            <br><br><br><br><br><br><br><br><br><br><br>
            <!-- Ici !-->
        </div>
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
		                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
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
						<p>Formulaire d'inscription à mettre ici</p>
				</div>
			</div>
    </section>

    <section id="acces">
			<h2>L'accès au festival</h2>
			<div class="content">
				<?php
				echo '<form id="contact" method="post" action="'.$form_action.'">
					<fieldset>
						<legend>Vos coordonnées</legend>
						<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" /></p>
						<p><label for="email">Email :</label><input type="text" id="email" name="email" value="'.stripslashes($email).'" tabindex="2" /></p>
					</fieldset>

					<fieldset><legend>Votre message :</legend>
						<p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" /></p>
						<p><label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="30" rows="8">'.stripslashes($message).'</textarea></p>
					</fieldset>

					<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
				</form>' ?>
				<div id="map"></div>
			</div>
    </section>


</body>
</html>
