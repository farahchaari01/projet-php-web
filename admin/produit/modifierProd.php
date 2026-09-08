<?php
    //recuperation des données
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $categorie = $_POST['categorie'];
    $img = $_POST["image"];
    $image=$_FILES["$img"]['name'];
    // connexion bd
    include "../../cnx.php";
    if ($image=="")
    {
        //création req
        $req = "UPDATE produit SET id='$id', nom='$nom', prix='$prix', description='$description', categorie='$categorie' WHERE id='$id'";
        //exec req
        $res = $dbco->query($req);
        //resultat req
        if($res){
            header('location:listeProd.php');
        }
    } else
    {
       $fichierTemp=$_FILES['image']['tmp_name'];
        move_uploaded_file($fichierTemp, '../../images/'.$image );
        //création req
        $req = "UPDATE produit SET id='$id', nom='$nom', prix='$prix', description='$description', categorie='$categorie', image='$image' WHERE id='$id'";
        //exec req
        $res = $dbco->query($req);
        //resultat req
        if($res){
            header('location:listeProd.php');
        }
    }
   