<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.nombox
		{
			width: 320px;
			height: 460px;
			background: blue;
			color: #fff;
			top: 90%;
			left: 88%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 70px 30px;
			border-radius:50px;
		}
		.contact
		{
			width: 200px;
			height: 200px;
			border-radius: 50%;
			position: absolute;
			top: -110px;
			left: calc(50% - 100px);
		}
		.h11
		{
			margin: 0;
			padding: 0 0 10px;
			text-align: center;
			font-size: 20px;
		}
		.nombox p
		{
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.nombox input 
		{
			width: 100%;
			margin-bottom: 20px;

		}
		.nombox input[type="text"], input[type="password"]
		{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 10px;
		} 
		.nombox input[type="submit"]

		{
			border: none;
			outline:none;
			height: 40px;
			background: #fb2525;
			color: #fff;
			font-size: 18px;
			border-radius:20px;
		}
		.nombox input[type="submit"]:hover
		{
			cursor: pointer;
			background: #ffc107;
			color: #000;
		}
		.nombox a
		{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: darkgrey;
		}
		.nombox a:hover
		{
			color: #ffc107;
		}


	</style>
</head>
<body>
	<div class="nombox">
		<img src="contact.png" class="contact">
		<h1 class="h11">IDENTIFICATION</h1>
		<form method="post" action="form.php">
			<p>NOM</p>
			<input type="text" name="nom" placeholder="NOM">
			<p>Ministère</p>
			<input type="text" name="min" placeholder="Ministère">
			<p>Mot de passe</p>
			<input type="password" name="mdp" placeholder="mot de passe" required="">
			<input type="submit" name="" value="Connexion">
			<a href="#">Vous avez perdu votre mot de passe?</a></br>
			<a href="#">Créez un nouveau compte</a>
		</form>
	</div>

</body>
</html>

<?php 
# test de saisie
if((isset($_GET['nom']))&&(isset($_GET['mdp']))&& (isset($_GET['min'])))
{
	if(($_GET['nom']=='Murphy') && ($_GET['min']=='chorale'))
	{
		header("location:cho.php");
		# affichage du message de bienvenu avec le $nom de l'utilisateur
	}
	else if($_GET['nom']=='Bonsoir')
	{
		echo 'Bonsoir Monsieur';
	}
}
 ?>