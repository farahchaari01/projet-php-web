<?php
session_start();
//recuperation des données
$id = $_GET['id'];
// connexion bd
include "../../cnx.php";
//création req
$req = "DELETE FROM produit WHERE id='$id'";
//exec req
$res = $dbco->query($req);
//resultat req
if($res){
    header('location:listeProd.php?delete=ok');
}
?>