<!DOCTYPE html>
<html id="top" lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Nous contacter - UPPER</title>
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
$texte="Si vous êtes interessés par nos services, veuillez nous le faire savoir en renseignant ce formulaire.<br/>Nous prendrons contact avec vous dès que possible.";
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
		<div class="nav-clear"></div>
		<img src="/static/img/UPPER.png" alt="Logotype UPPER" class="logo" width="170" height="220"/>
		<section id="contact">
			<p style="margin:0; padding-top:10px; padding-bottom:10px; color:white;"><?php echo($texte);?></p>
			<form action="contact.php" method="post" class="contact-form">
				<label>
					<span>Votre nom</span>
					<input type="text" name="nom" placeholder="Dupont"/>
				</label>
				<label>
					<span>Votre prénom</span>
					<input type="text" name="prenom" placeholder="Tintin"/>
				</label>
				<label>
					<span>Votre adresse mail</span>
					<input type="text" name="mail" placeholder="titi-toto@example.com"/>
				</label>
				<label>
					<span>Objet de votre message</span>
					<input type="text" name="objet" placeholder="Sujet"/>
				</label>
				<label>
					<span>Votre message</span>
					<textarea name="message" id="message" size="500"></textarea>
				</label>
				<label class="form-validation">
					<span></span>
					<input type="submit" value="Valider"/>
				</label>
			</form>
		</section>
		<footer id="footer">
			<a href="#top" class="top-link"><img class="fleche_haut" src="/static/img/fleche_haut.png" height="75px" width="75px"/></a>
			<a href="https://facebook.com/pages/Upper/821358121245424?ref=aymt_homepage_panel" target="_blank"><img class="img-partage" src="/static/img/fb.png" height="75px" width="75px"/></a>
			<a href="https://twitter.com/agence_upper" target="_blank"><img class="img-partage" src="/static/img/twit.png" height="75px" width="75px"/></a>
			<a href="https://plus.google.com/share?url=http://upper.olympe.in" target="_blank"><img class="img-partage" src="/static/img/ggplus.png" height="75px" width="75px"/></a>
		</footer>
	</body>
</html>