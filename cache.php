
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
session_start();
$_SESSION['search']=$_POST['search'];
# test de saisie
if((isset($_POST['search'])))
{
	# validation du mot de passe
	if($_POST['search']=='Chargé' || $_POST['search']=='HOUELEKOU' || 
		$_POST['search']=='houelekou' || $_POST['search']=='Houelekou')
	{
		header("location:rec.html");
		# affichage du message de bienvenu avec le $search de l'utilisateur
	}
	else if($_POST['search']=='Bonsoir')
	{
		echo 'Bonsoir Monsieur';
	}
	else if($_POST['search']=='Omer' || $_POST['search']=='omer' || 
		$_POST['search']=='Ditengou omer' || $_POST['search']=='DITENGOU omer')	
	{
		header("location:rec.html");
	}
	else if($_POST['search']=='loic' || $_POST['search']=='Loïc' || 
		$_POST['search']=='mombo loic' || $_POST['search']=='MOMBO Loïc')	
	{
		header("location:rec.html");
	}
	else if($_POST['search']=='ditengou' || $_POST['search']=='les ditengous' || 
		$_POST['search']=='famille Ditengou' || $_POST['search']=='DITENGOU')	
	{
		header("location:img.html");
	}
	else
		echo'Recherche introuvable';
}
?>
<?php 
if(isset($_POST['Retour']))
{
	session_destroy();
	header("location:ECC.php");
}
 ?>
	<form method="POST">
			<table align="left">
				<tr>
					<br><br>
					<td align="center" colspan="2"> 
						<input type="submit" name="Retour" value="Retour"/>
					</td>
				</tr>
			</table>
		</form>
</body>
</html>
