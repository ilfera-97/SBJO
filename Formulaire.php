<?php 
session_start();
//<table align="right">
		//<tr>
		//	<td><?php  include_once('Formulaire.php')?> 



<!Doctype html>
	<html>
		<head>
		<meta charset= "utf-8"/>
		<title></title>
		
		</head>
			<body>
		<form method="POST" action="cache.php">
			<table align="center" border="1">
				<tr>
					<th colspan="2"><h2 align="center">Connexion</h2></th>
				</tr>
				<tr>
					<td>Nom d'utilisateur:</td>
					<td><input type="text" name="nom" required="required"></td>
				</tr>
				<tr>
					<td>Prénom :</td>
					<td><input type="text" name="prénom" required="required"></td>
				</tr>
				<tr>
					<td>Ministère</td>
					<td><input type="text" name="min" required="required"></td>
				</tr>
				<tr>
					<td>Grade</td>
					<td><input type="text" name="Grade" required="required"></td>
				</tr>
				<tr>
					<td>Mot_de_passe:</td>
					<td><input type="password" name="pwd" required="required"></td>
				</tr>
				<tr>
					<td align="right" colspan="2"><input type="submit" name="Connexion" value="Connexion"></td>
				</tr>
			</table>
			</body> 
	</html>    