<?php
/*session_start();
//recuperation des données
$id = $_GET['id'];
// connexion bd
include "../../cnx.php";
//création req
$req = "DELETE FROM categories WHERE id='$id'";
//exec req
$res = $dbco->query($req);
//resultat req
if($res){
    header('location:listeCa.php');
}*/
echo "Id de la categorie".$_GET['id'];

$id=$_GET['id'];

include "../../cnx.php";
$req= "DELETE FROM categories WHERE id='$id'";
$res = $dbco->query($req);
if($res){
    //echo "categorie supprimée";
    header('location:listeCa.php?delete=ok');
}
?>