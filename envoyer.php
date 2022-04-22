<?php

	 		if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['mail']))
	 		{
	 			$nom=$_POST['nom'];
	 			$prenom=$_POST['prenom'];
	 			$mail=$_POST['mail'];
	 			$com=$_POST['com'];

			$cnx= new PDO('mysql:host=127.0.0.1;dbname=choristes;charset=utf8', 'root','');
			
			$req='insert into commentaire(nom,prenom,mail,com) 
				values(?, ?, ?,?)';	
				$stmt=$cnx->prepare($req);
				$stmt->bindValue(1,$nom, PDO::PARAM_STR);
				$stmt->bindValue(2,$prenom, PDO::PARAM_STR);
				$stmt->bindValue(3,$mail, PDO::PARAM_STR);
				$stmt->bindValue(4,$com, PDO::PARAM_STR);
				$stmt->execute();

				header('location:index.php');
}


	 		 ?>