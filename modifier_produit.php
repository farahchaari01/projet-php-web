<!doctype html>
<html lang="en">
<head>
    
    <title>Modifier produit</title>
</head>
<body>
<?php
require_once 'pdo.php';
include 'nav.php' ?>
<div class="container py-2">
    <h4>Modifier le produit</h4>
    <?php
    $id = $_GET['id'];
    require_once 'pdo.php';
    $sqlState = $pdo->prepare('SELECT * from produit WHERE id=?');
    $sqlState->execute([$id]);
    $produit = $sqlState->fetch(PDO::FETCH_OBJ);;
    if (isset($_POST['modifier_produit'])) {
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $discount = $_POST['discount'];
        $description = $_POST['description'];

       /* $filename = '';
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $filename = uniqid() . $image;
            move_uploaded_file($_FILES['image']['tmp_name'], 'upload/produit/' . $filename);
        }*/


        if (!empty($nom) && !empty($prix) ) {

            if (!empty($filename)) { 
                $query = "UPDATE produit SET nom=? ,
                                                    prix=? ,
                                                    createur=?,
                                                    date_creation=?,
                                                    date_modification=?,
                                                    discount=? ,
                                                    description=?,
                                                    image=?
                                                WHERE id = ? ";
                $sqlState = $pdo->prepare($query);
                $updated = $sqlState->execute([$nom, $prix,$createur, $date_creation,$date_modification, $discount, $description, $filename, $id]);
            } else {
                $query = "UPDATE produit 
                                                SET nom=? ,
                                                    prix=? ,
                                                    createur=?,
                                                    date_creation=?,
                                                    date_modification=?,
                                                    discount=? ,
                                                    description=?,
                                                    image=?
                                                WHERE id = ? ";
                $sqlState = $pdo->prepare($query);
                $updated = $sqlState->execute([$nom, $prix,$createur, $date_creation,$date_modification, $discount, $description, $filename, $id]);
            }
            if ($updated) {
                header('location: produits.php');
            } else {

                ?>
                <div class="alert alert-danger" role="alert">
                    erreur de la base de données (40023).
                </div>
                <?php
            }
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                nom et prix sont obligatoires.
            </div>
            <?php
        }

    }
    ?>


    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $produit->id ?>">
        <label class="form-label">Nom</label>
        <input type="text" class="form-control" name="libelle" value="<?= $produit->nom ?>">

        <label class="form-label">Prix</label>
        <input type="number" class="form-control" step="0.1" name="prix" min="0" value="<?= $produit->prix ?>">

        <label class="form-label">Discount</label>
        <input type="range" value="0" class="form-control" name="discount" min="0" max="90"
               value="<?= $produit->discount ?>">

        <label class="form-label">Description</label>
        <textarea class="form-control" name="description"><?= $produit->description ?></textarea>

        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image">
        <img width="250" class="img img-fluid" src="upload/produit/<?= $produit->image ?>"><br>
        <?php

        ?>

        
        </select>
        <input type="submit" value="Modifier produit" class="btn btn-primary my-2" name="modifier">
    </form>
</div>

</body>
</html>