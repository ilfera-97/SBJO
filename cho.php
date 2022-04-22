<?php 
$cnx= new PDO('mysql:host=127.0.0.1;dbname=choristes;charset=utf8', 'root','');
$choristess = $cnx->prepare('Select * from choristes;');
$choristess -> execute(); 
$cli = "Liste des choristes"
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>gestion_des_choristess</title>
	<style type="text/css">
			.tab1
			{
				margin-top: 150px;
				border: 1px solid;
				background-color: #eee;
			}
			td
			{
				border:0px;
				padding: 10px; 
			}
			th{
				border-bottom: 1px solid;
				background-color: :#ddd;
			}
	header
		{
	top: 0px;
	width: 100%;
	height: 173px;
	background: url('hdd.png');
	background-size: 670px;

		}
nav
		{
	top: 100px;
	width: 100%;
	height: 40px;
	background: blue;
	border-radius: 10px;
		}

nav ul li a
	{
	
	border-radius: 26px;
	color: black;
	}

nav ul
{
	list-style: none;
	margin: 0px; 
	padding: 0px;
}

nav ul li{
	margin: 0px; 
	padding: 0px;
	width: 187px;
	height: 2px;
	float: left;
	background-color: 15;
	line-height: 40px;
	text-align: center;	
}

nav ul li a:hover {
	background-color: yellow;
}
nav ul li a{
	display: block;
}

@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul
  {
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
.can
{
	max-width: 670px;
	background: #deec44;
	padding: 10px;
	margin-top: 0px;
	height: 350px;
	border-radius: 40px;
}
.pro
{
	background: #06bbda;
	max-width: 50%;
	height: 350px;
	margin-top: -370px;
	margin-left: 690px;
	padding: 10px;
	border-radius: 40px;
}
.tab
{
	margin-top: 10px;
	margin-left: 20px;
}
.tr1
{
	background: blue;
	height: 50px;
	box-sizing: border-box;
	border-radius: 20px;
}

	</style>

</head>
<body background=>
	<header>
				
	</header>
		
	<nav>
		<input type="checkbox" id="check"> 
		<label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      	</label>

		<ul><li><a href="index.php">
		<svg version="1.0"width="25px" height="25px" viewBox="0 0 512 512"preserveAspectRatio="xMidYMid meet">

		<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"fill="#000000" stroke="none">
		<path d="M2447 5106 c-21 -8 -57 -26 -80 -41 -23 -15 -551 -536 -1173 -1159
		-1282 -1282 -1194 -1183 -1194 -1345 0 -69 5 -96 24 -137 34 -72 78 -119 148
		-154 l61 -30 204 0 203 0 0 -995 c0 -983 0 -995 21 -1050 28 -74 100 -146 174
		-174 54 -20 73 -21 570 -21 l514 0 3 833 3 832 26 55 c37 80 81 125 157 162
		l67 33 385 0 385 0 67 -33 c76 -37 120 -82 157 -162 l26 -55 3 -833 3 -833
		527 3 527 3 47 23 c60 30 120 90 150 150 l23 47 3 1008 2 1007 204 0 203 0 61
		30 c114 58 164 138 170 278 4 89 3 95 -29 160 -28 58 -71 105 -321 358 l-288
		291 0 596 c0 580 -1 598 -21 652 -28 74 -100 146 -174 174 -51 19 -77 21 -285
		21 -272 0 -307 -8 -390 -90 -71 -72 -90 -130 -90 -277 l0 -116 -372 369 c-430
		426 -431 426 -573 431 -60 2 -103 -1 -128 -11z"/>
		</g>
		</svg>  	<b>ACCUEIL</a></lI>
					<li><a href="page.html">Cantique & Prog</a>
					<li><a href="page.html"><img src="organe.png" height="20px" width="25px">COMITES</a></li>
					<li><a href="cho.php">CHORISTES</a>
					<li><a href="img.html">IMAGES</a></li>
					<li><a href="video.php">VIDEOS</a></li>
					<li><a href="page.html"><img src="information.png" height="20px" width="25px">INFOS</a></li>
					</ul>
				</nav>
	<section>
		<div class="can">
		<div align="center"><p>CANTIQUE DE LA SEMAINE</p></div>
				<ul>
					<li><a href="#">Cantique 1:</a> Qui pourra faire</li><br>
					<li><a href="#">Cantique 2:</a> Chantez ce beau cantique</li><br>
					<li><a href="#">Cantique 3:</a> Que poyrrai-je t'offrir</li><br>
					<li><a href="#">Cantique 4:</a> Oh saint esprit descends</li><br>
					<li><a href="#">Cantique 5:</a>Comme jesus t'appelle</li><br>
					<li><a href="#">Cantique 6:</a>Oh Seigneur roi de lumière</li><br>
					<li><a href="#">Cantique 7:</a>Jehovah source de joie</li>
				</ul>
			</div>

		<div class="pro">
		<div align="center">	<p>PROGRAMME DU CULTE</p> </div>
				<ul>
					<li>Prédication: LA SAINTE PAROLE</li><br>
					<li>Quête: COTISONS AVEC UN COEUR DE JOIE</li><br>
					<li>Cisation extraordinaire: LA SAINTE PAROLE</li>
						<ul>
							<li>Merci Seigneur</li>
							<li>Merci Seigneur</li>
							<li>Merci Seigneur</li>
						</ul><br>
					<li>Actions de grâce: LA SAINTE PAROLE</li>
						<ul>
							<li>Merci Seigneur</li>
							<li>Merci Seigneur</li>
							<li>Merci Seigneur</li>
						</ul><br>
					<li>Retour: LA SAINTE PAROLE</li>
				</ul>
		</div>	

	</section>
	
<div class="tab">
	<table class="tab2">
		<tr class="tr1">
			<th>N°</th>
			<th>Nom</th>
			<th>Datenais</th>
			<th>Fonction</th>
			<th>Grade</th>
			<th>ancien</th>
			<th>Contact</th>
		</tr>

<?php foreach ($choristess as $choristes): ?>
	<tr height="20px">
			<th><?=$choristes[0]; ?></th>
			<th><?=$choristes[1]; ?></th>
			<th><?=$choristes[2]; ?></th>
			<th><?=$choristes[3]; ?></th>
			<th><?=$choristes[4]; ?></th>
			<th><?=$choristes[5]; ?></th>
			<th><?=$choristes[6]; ?></th>
		</tr>

         <?php endforeach;?>
	</table>
	</div>
</body>
</html>