<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link rel="stylesheet" type="text/css" href="insert.css"/>
		<link rel="stylesheet" type="text/css" href="style_cont.css"/>
	</head>
<body>
		<header>
			<div id="entete">ARCHIVAGE DES RELEVES DE NOTES </div>
		</header>
<nav>	
<hr size="8" font color="#skyblue"/> 
<hr size="8" font color="skyblue"/>
</nav>
		<div class="img1">
	
		</div>
		<div class="img2">
	<img src="log.png" width="170" height="140" alt="logo du Lycee classique ngaoundere"/>
		</div>
		<div>
			<div class="contenu2">
				<button><a href="index.php">ACCUEIL</a> </button><br><br>
				<button><a href="form_insert.php">INSERTION DANS LA BASE DE DONNEE</a> </button><br><br>
				<button><a href="form_recher.php">RECHERCHER DANS LA BASE DE DONNEE</a> </button>
			<div/>
			<div class="contenu3">
				<form method="POST" action="recherche.php">
					
					<div class="input-group">
					<label>Matricule:</label><br>
					<input type="text"  name="matricule" placeholder="matricule_etudiant">
					</div> <br>
					
					<br>

			<div class="input-groupv">
						<button type="submit" name="valider" class="btn">VALIDER</button>
					</div>



				</form>
			</div>
		</div>

<footer>
	
</footer>
</body>
</html>