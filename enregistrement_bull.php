<?php
 //include ('connection BD.php');
// $connexion=connection();
$bdd = new PDO('mysql:host=localhost;dbname=archive;charset=utf8','root','');
		 $matricule = $_POST['matricule'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$sexe= $_POST['sexe'];
		$niveau = $_POST['niveau'];
		$departement = $_POST['departement'];	
		$annee = $_POST['annee_academique'];

//insertion de l'image
$dossier = './image/';
$fichier = basename($_FILES['image']['name']);
$taille_maxi = 50000000;
$taille = filesize($_FILES['image']['tmp_name']);
$extensions = array('.PNG','.png', '.gif', '.jpg','.swf', '.jpeg');
$extension = strrchr($_FILES['image']['name'], '.');
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
$erreur = 'Vous devez uploader un fichier de type png, gif, jpg, swf, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
$erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
//On formate le nom du fichier ici...
$fichier = strtr($fichier,
'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction
//renvoie TRUE, c'est que ça a fonctionné...
{
echo '<center><b>Upload effectué avec succès !<b></center>';
}
else //Sinon (la fonction renvoie FALSE).
{
echo 'Echec de l\'upload !';
}
}
else
{
echo $erreur;
}
$chemin='image/'.$fichier.'';
	
//requete d'insertion

$req = ("INSERT INTO `etudiant`(`matriculee`, `nom`, `prenom`, `sexe`, `niveau`, `Annee_academique`, `departement`, `releve`) VALUES (?,?,?,?,?,?,?,?)");
$res = $bdd->prepare($req);
$tab = [
	$matricule,
	$nom,
	$prenom,
	$sexe,
	$niveau,
	$annee,
	$departement,
	$chemin,
];
$res->execute($tab);
if(!empty($res)){
	header('location:form_insert.php');
}
?>
