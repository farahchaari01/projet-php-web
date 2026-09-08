
<?php
               
     require_once ("pdo.php");
     $id_etd=$_GET['id_etd'];
     $sql = "DELETE FROM visiteur WHERE id=$id_etd";

     $pdo->exec( $sql);

     echo " Suppression de l'utilisateur ".$id_etd." avec succès !! ";
     header('location:liste_utilisateurs.php');

?>
