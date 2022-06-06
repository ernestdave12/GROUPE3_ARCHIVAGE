<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link rel="stylesheet" type="text/css" href="isr.css"/>
		<link rel="stylesheet" type="text/css" href="style_isr.css"/>
	</head>
<body>
		<header>
			<div id="entete"> ARCHIVAGE DES RELEVES DE NOTES </div>
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
			<div/><div class="contenu3">
			<form method="POST" action="enregistrement_bull.php" enctype="multipart/form-data">
					
			<div class="input-group">
					<label>MATRICULE:</label>
					<input type="text"  name="matricule" placeholder="entrez le matricule" required="veuillez entrer un matricule">
					</div>


					<div class="input-group">
					<label>NOM:</label>
					<input type="text"  name="nom" value="" placeholder="entrez le nom" required="veuillez entrer un nom">
					</div>

					<div class="input-group">
					<label>PRENOM:</label>
					<input type="text"  name="prenom" value="" placeholder="entrez le prenom" required="veuillez entrer un prenom">
					</div>
					<div class="inpt-group">
					<label>SEXE:</label>
					<input type="radio"  name="sexe" value="masculin">M
					<input type="radio"  name="sexe" value="feminin">F
					</div>

					<div class="input-group">
					<label>DEPARTEMENT:</label>
					<input type="text"  name="departement" value="" placeholder="entrez le departement" required="veuillez entrer un departement">
					</div>

					<div class="inut-group">
					<label>NIVEAU:</label>
					<select name="niveau" required>
						<option value="L1">L1</option>
						<option value="L2">L2</option>
						<option value="L3">L3</option>
						<option value="M1">M1</option>
						<option value="M2">M2</option>
						<option value="T1">T1</option>
						<option value="T2">T2</option>
						<option value="T3">T3</option>
					</select>
    
					<div class="inut-group">
					<label>ANNEE ACADEMIQUE:</label>
					<input type="text" value="" placeholder="entrez l'annee academique" name="annee_academique" required>
					</div>

					<div class="input-group2">
					<label>RELEVE:</label>
					<input type="file"  name="image">
					</div>
					

					<div class="input-group">
						<button type="submit" name="valider" class="btn">VALIDER</button>
					</div>

			

				</form>
		</div>

<footer>
	
</footer>
</body>
</html>