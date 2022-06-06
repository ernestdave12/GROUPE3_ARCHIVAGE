<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<link rel="stylesheet" type="text/css" href="insert.css"/>
		<link rel="stylesheet" type="text/css" href="style_cont.css"/>
	</head>
<body>
		<header>
			<div id="entete">ARCHIVAGE DES RELEVES DE NOTES  </div>
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
			<?php
$bdd = new PDO('mysql:host=localhost;dbname=archive;charset=utf8','root','');
		
		$matricule = $_POST['matricule'];
		
$req = $bdd->query("SELECT * FROM etudiant WHERE matriculee='$matricule' ");

?>
		<center><form method="POST" action="init.php"><table border='5' cellspacing="5" cellpadding="10" bordercolor="black" >
		<tr align="center">
		<td>MATRICULE</td>
		<td>NOM & PRENOM</td>
		<td>SEXE</td>
		<td>CLASSE</td>
		<td>ANNEE</td>
		<td>IMAGE</td>
		
	</tr>

		<?php
		while ($resultat = $req ->fetch()) {
	?>

	<tr align="center">
		<td><?php echo $resultat['matriculee'];  ?></td>
		<td><?php echo $resultat['nom'] .' '. $resultat['prenom'];  ?></td>
		<td><?php echo $resultat['sexe'];  ?></td>
		<td><?php echo $resultat['niveau'];  ?></td>
		<td><?php echo $resultat['Annee_academique'];  ?></td>
		<td><?php echo '<a href="'.$resultat['releve'].'"><img width="50px" style="border-radius: 50%;" height="50px"  src="'.$resultat['releve'].'"></a>';  ?></td>
	</tr>
	<?php
}
?>
</table>

				</form>
			</div>
		</div>

<footer>
	
</footer>
</body>
</html>