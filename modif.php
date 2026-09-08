<?php
require_once ("pdo.php");  
/* récupération des données du formulaire */
$id = $_POST['id'];
$nom = $_POST['lname'];
$prenom = $_POST['fname'];
$mp = $_POST['mp'];
$etat = $_POST['etat'];
$date_creation = $_POST['date_creation'];
$date_modification = $_POST['date_modification'];
/*if ($photo=="")
{
    $sql = "UPDATE etudiant SET id=$id, nom='$nom', prenom='$prenom', mp='$mp', etat='$etat', date_creation='$date_creation' date_modification='$date_modification'  WHERE id=$id";
$pdo->exec($sql);
header('location:liste_utilisateurs.php');
} else
{
   $fichierTemp=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$photo );
$sql = "UPDATE etudiant SET id=$id, nom='$nom', prenom='$prenom', sexe='$sexe', an_naissance=$an_naissance, photo='$photo' WHERE id=$id";
  
$pdo->exec($sql);
header('location:liste_utilisateurs.php');
}
*/


?>



 