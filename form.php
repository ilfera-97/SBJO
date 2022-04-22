
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
session_start();
$_SESSION['nom']=$_POST['nom'];
$_SESSION['min']=$_POST['min'];


$cnx= new PDO('mysql:host=127.0.0.1;dbname=choristes;charset=utf8', 'root','');
$choristess = $cnx->prepare('Select nom from choristes;');
$choristess -> execute(); 
$cli=$choristess;

/**var_dump($choristess);**/


# test de saisie
if((isset($_POST['nom']))&&(isset($_POST['mdp']))&&(isset($_POST['min'])))
{
	# validation du mot de passe
	if(($_POST['mdp']=='1234') &&($_POST['nom']=='Murphy')&&($_POST['min']=='chorale'))
	{
		
		header("location:cho.php");
	}
	else
		echo'Saisissez le bon mot de passe';
}
?>
<?php 
if(isset($_POST['Deconnexion']))
{
	session_destroy();
	header("location:test.php");
}
 ?>
	<form method="POST">
			<table align="left">
				<tr>
					<br><br>
					<td align="center" colspan="2"> 
						<input type="submit" name="Deconnexion" value="Deconnexion"/>
					</td>
				</tr>
			</table>
		</form>
</body>
</html>
