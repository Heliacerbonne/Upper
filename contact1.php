<!DOCTYPE html>
<html id="top" lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Notre activité - UPPER</title>
		<link rel="stylesheet" href="/static/css/style.css"/>
		<script src="/static/js/jquery-2.1.4.min.js"></script>
		<script src="/static/js/upper.js"></script>
		<?php
//déclaration des variables
$nom="";
$prenom="";
$fichier="";
// Si tous les champs sont remplis
if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['message'])){
//Créations du contenu des fichiers
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$objet=$_POST['objet'];
$message=$_POST['message'];
$message = wordwrap($message, 70, "\r\n");
$ladate = date("d_m_Y");
$heure = date("H_i");
//Création des fichiers
$fichier=$nom.'_'.$prenom."_".$ladate."_".$heure.'.txt';
$fp=fopen("Messages/".$fichier,'at+');
fwrite($fp,"Nom : ".$nom."\r\n"."Prénom : ".$prenom."\r\n"."Mail : ".$mail."\r\n"."Objet : ".$objet."\r\n"."Message : ".$message."\r\n\r\n"."					le ".$ladate." à ".$heure);
// Nettoyage des variables
unset($_POST['nom']);
unset($_POST['prenom']);
unset($_POST['mail']);
unset($_POST['objet']);
unset($_POST['message']);
// Confirmation de la réception du message et création du fichier
$texte="Nous avons bien reçu votre message et nous vous répondrons dès que possible.";
}
else {
// Redemande de remplir les champs
$texte="Si vous êtes interessés par nos services veuillez remplir tous les champs de ce formulaire pour nous le faire savoir.<br/>Nous prendrons contact avec vous dès que possible.<br/>";
} 


?>
	</head>
	<body>
		<nav id="main-nav">
			<a class="nav-left" href="/">Retour à l'accueil</a>
			<span class="nav-right">
				<a href="equipe.html">L'équipe</a>
				<a href="activite.html">Notre activité</a>
				<a href="realisations.html">Réalisations</a>
				<a href="contact.php">Nous contacter</a>
			</span>
		</nav>
		<section id="home">
			<img src="/static/img/UPPER.png" alt="Logotype UPPER" class="logo" width="170" height="220"/>
		</section>
		<section class="infos">
			<section id="contact">
				<p style="margin:0; padding-top:10px; padding-bottom:10px; color:white; display:block;"><?php echo($texte);?></p>
				<form action="contact.php" method="post">
					<p class="para">Votre nom : <input type="text" name="nom" id="nom" class="champs" align="center" size="30"/></p><br>
					<p class="para">Votre prénom : <input type="text" name="prenom" id="prenom" class="champs" align="center" size="30"/></p><br>
					<p class="para">Votre adresse mail : <input type="text" name="mail" id="mail" class="champs" align="center" size="70"/></p><br>
					<p class="para">L'objet de votre message : <input type="text" name="objet" id="objet" class="champs" align="center" size="70"/></p><br>
					<p class="para">Votre message : <textarea name="message" id="message" rows="8" cols="45" class="champs" align="center" size="500"></textarea></p><br>

				<input type="submit" value="Valider" id="valider"/><br>

				</form>
			</section>	


		
		
		
			
			
		</section>
		<footer id="footer">
			<a href="#top" class="top-link"><img class="fleche_haut" src="/static/img/fleche_haut.png" height="75px" width="75px"/></a>
			<a href="https://facebook.com/pages/Upper/821358121245424?ref=aymt_homepage_panel" target="_blank"><img class="img-partage" src="/static/img/fb.png" height="75px" width="75px"/></a>
			<a href="https://twitter.com/agence_upper" target="_blank"><img class="img-partage" src="/static/img/twit.png" height="75px" width="75px"/></a>
			<a href="https://plus.google.com/share?url=http://upper.olympe.in" target="_blank"><img class="img-partage" src="/static/img/ggplus.png" height="75px" width="75px"/></a>
		</footer>
	</body>
</html>