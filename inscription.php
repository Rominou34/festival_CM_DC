<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Les court-métrages</title>
        <!--

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        !-->

    </head>
    <body>
        <a id="top"> </a>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href=".">Accueil</a>
                        </li>
                        <li>
                            <a href="#">Les court-métrages</a>
                        </li>
                        <li class="active">
                            <a href="#">Inscription</a>
                        </li>
                        <li>
                            <a href="#">Le festival</a>
                        </li>
                        <li class="dropdown pull-right">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Action</a>
                                </li>
                                <li>
                                    <a href="#">Another action</a>
                                </li>
                                <li>
                                    <a href="#">Something else here</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">Separated link</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <?php
                    //		$donnee_session = $_SESSION[‘donnee1’];
                    //
            //		$url = $_POST["url"];
                    //
            //		if($url != ""){
                    //			//echo "url = " . $url . "<br>";
                    //  			header("location: http://www.google.com", true, 301);
                    //			//echo "donnee_session = " . $donnee_session . "<br>";
                    //  			exit;
                    //		} 
                    //
            //		$couleur = "";
                    //
            //		if(isset($_COOKIE ["couleurFond"])){
                    //			$couleur=$_COOKIE ["couleurFond"];
                    //		} else {
                    //			setcookie("couleurFond","#FFFFFF",time()+3600);
                    //		}
                    //
            //		echo "couleur = " . $couleur . "<br>";

                    $nom = $_POST["nom"];
                    $email = $_POST["email"];

                    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                        echo("$email n'est pas une email valide");
                        return;
                    }
                    ?>
                    <br>
                    <img src="images/dc.png"> 

                    <?php
                    $nom = $_POST["nom"];
                    $prenom = $_POST["prenom"];
                    $email = $_POST["email"];

                    $mail_Data = "Nouveau pré-inscrit: " . $prenom . " " . $nom . " email: " . $email;
                    $headers = "MIME-Version: 1.0 \n";
                    $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
                    $headers .= "From: $from  \n";
                    $headers .= "Disposition-Notification-To: $from  \n";

                    // Message de Priorité haute
                    // -------------------------
                    $headers .= "X-Priority: 1  \n";
                    $headers .= "X-MSMail-Priority: High \n";

                    $CR_Mail = TRUE;

                    //$CR_Mail = @mail($to, $Subject, $mail_Data, $headers);
                    // Envoi du mail
                    $CR_Mail = mail('mathias@devoption.net', 'Pré-inscription festival DC', $mail_Data, $headers);

                    if ($CR_Mail === FALSE) {
                        echo " ### CR_Mail=$CR_Mail - Erreur envoi mail \n";
                        return;
                    }
                    ?>

                    <h1>Merci <?php echo $prenom . " " . $nom; ?> pour votre inscription </h1>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
