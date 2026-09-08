<?php
    //recuperation des données
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    // connexion bd
    include "../../cnx.php";
    if ($description=="")
    {        
        //création req
        $req = "UPDATE categories SET id='$id', nom='$nom', description='$description' WHERE id='$id'";
        //exec req
        $res = $dbco->query($req);
        //resultat req
        if($res){
            header('location:listeCa.php');
        }
    } else
    {
        //création req
        $req = "UPDATE categories SET id='$id', nom='$nom', description='$description' WHERE id='$id'";
        //exec req
        $res = $dbco->query($req);
        //resultat req
        if($res){
            header('location:listeCa.php');
        }
    }

   