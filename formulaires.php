<?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'arnaud.romain34@gmail.com';

// copie ? (envoie une copie au visiteur)
$copie = 'non';

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

/**
***** FORMULAIRE D'INSCRIPTION *****
**/

// formulaire envoyé, on récupère tous les champs.
$nom_ins     = (isset($_POST['nom_ins']))     ? Rec($_POST['nom_ins'])     : '';
$prenom_ins  = (isset($_POST['prenom_ins']))  ? Rec($_POST['prenom_ins'])  : '';
$email_ins   = (isset($_POST['email_ins']))   ? Rec($_POST['email_ins'])   : '';
$num_ins  = (isset($_POST['num_ins']))  ? Rec($_POST['num_ins'])  : '';
$nb_personnes  = (isset($_POST['nb_personnes']))  ? Rec($_POST['nb_personnes'])  : '';
$message_ins = (isset($_POST['message_ins'])) ? Rec($_POST['message_ins']) : '';

// On va vérifier les variables et l'email ...
$email_ins = (IsEmail($email_ins)) ? $email_ins : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi_ins']))
{
	if (($nom_ins != '') && ($prenom_ins != '') && ($email_ins != '') && ($num_ins != '')
  && ($nb_personnes != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers_ins  = 'From:'.$nom_ins.' '.$prenom_ins.' <'.$email_ins.'>' . "\r\n";
		//$headers .= 'Reply-To: '.$email. "\r\n" ;
		//$headers .= 'X-Mailer:PHP/'.phpversion();

		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.';'.$email_ins;
		}
		else
		{
			$cible = $destinataire;
		};

		// Remplacement de certains caractères spéciaux
		$message_ins = str_replace("&#039;","'",$message_ins);
		$message_ins = str_replace("&#8217;","'",$message_ins);
		$message_ins = str_replace("&quot;",'"',$message_ins);
		$message_ins = str_replace('&lt;br&gt;','',$message_ins);
		$message_ins = str_replace('&lt;br /&gt;','',$message_ins);
		$message_ins = str_replace("&lt;","&lt;",$message_ins);
		$message_ins = str_replace("&gt;","&gt;",$message_ins);
		$message_ins = str_replace("&amp;","&",$message_ins);

		// Envoi du mail
		$num_emails = 0;
		$tmp = explode(';', $cible);
    $message_du_mail = "Une personne souhaite s'inscrire au festival du court-métrage.\n".
    "Voici ses coordonnées:\nNom: ".$nom_ins."\nPrénom: ".$prenom_ins."\nEmail: ".$email_ins.
    "\nNuméro de téléphone: ".$num_ins."\n\nLa personne souhaite venir accompagnée de ".$nb_personnes.
    " autres personnes et a laissé ce message: ".$message_ins;
		foreach($tmp as $email_destinataire)
		{
			if (mail($email_destinataire, "Demande d'inscription au festival du court-métrage", $message_du_mail, $headers_ins))
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
