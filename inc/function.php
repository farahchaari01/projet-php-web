<?php
function addVisiteur($data){
    //connexion BD
    include 'C:\xampp\htdocs\ProjetWeb2\cnx.php';
    //Création req
    $req = "INSERT INTO visiteur(nom,prenom,email,mp) VALUES('".$data['nom']."','".$data['prenom']."','".$data['email']."','".$data['mp']."') ";
    //exec req
    $res = $dbco->query($req);
    //resultat req
    if($res){
        return true;
    }
    else{
        return false;
    }
}
function connectVisiteur($data){
    //connexion BD
    include 'C:\xampp\htdocs\ProjetWeb2\cnx.php';
    //Création req
    $req = "SELECT * FROM visiteur WHERE email='".$data['email']."' AND mp='".$data['mp']."' ";
    //exec req
    $res = $dbco->query($req);
    //resultat req
    $user = $res->fetch();
    return $user;
}
function getAllCategories(){
    //Connexion BD
    include 'C:\xampp\htdocs\ProjetWeb2\cnx.php';
    //Création req
    $req = "SELECT * FROM categories ";
    //exec req
    $res = $dbco->query($req);
    //resultat req
    $categorie= $res->fetchAll();
    return $categorie;
}
function getAllProducts(){
    //connexion BD
    include 'C:\xampp\htdocs\ProjetWeb2\cnx.php';
    //Création req
    $req = "SELECT * FROM produit ";
    //exec req
    $res = $dbco->query($req);
    //resultat req
    $produit= $res->fetchAll();
    return $produit;
}
function getCategorieBy($id){
    //connexion BD
    include 'C:\xampp\htdocs\ProjetWeb2\cnx.php';
    //Création req
    $req = "SELECT * FROM categories Where id = $id";
    //exec req
    $res = $dbco->query($req);
    //resultat req
    $categorie= $res->fetch();
    return $categorie;
}
function getProductBy($id){
    //connexion BD
    include 'C:\xampp\htdocs\ProjetWeb2\cnx.php';
    //Création req
    $req = "SELECT * FROM produit Where id = $id";
    //exec req
    $res = $dbco->query($req);
    //resultat req
    $produit= $res->fetch();
    return $produit;
}
function modifierAdmin($data){
    //Connexion BD
    include 'C:\xampp\htdocs\ProjetWeb2\cnx.php';
    //Création req
    if($data['mp'] != ""){
        $req="UPDATE visiteur SET nom='".$data['nom']."', prenom='".$data['prenom']."', email='".$data['email']."', mp='".$data['mp']."' WHERE id='".$data['id_admin']."'";
    }
    else{
        $req="UPDATE visiteur SET nom='".$data['nom']."', prenom='".$data['prenom']."', email='".$data['email']."' WHERE id='".$data['id_admin']."'";
    }
    //exec req
    $res = $dbco->query($req);
    return true;
}
function getAllCommands(){
    //connexion BD
    include 'C:\xampp\htdocs\ProjetWeb2\cnx.php';
    //Création req
    $req = "SELECT * FROM commandes ";
    //exec req
    $res = $dbco->query($req);
    //resultat req
    $commandes= $res->fetchAll();
    return $commandes;
}

?>