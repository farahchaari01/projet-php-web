<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vente en ligne</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'nav.php' ?>
<div class="container py-2">
    <?php
    if (isset($_POST['ajouter_utilisateur'])) { //id	email	nom	prenom	mp	etat	date_creation	date_modification
        $email = $_POST['email'];
        $mp = $_POST['mp'];

        if (!empty($email) && !empty($mp)) {
            require_once 'pdo.php';
            $date = date('Y-m-d');
            $sqlState = $pdo->prepare('INSERT INTO visiteur VALUES(null,?,?,?,?,?,?,?)');
            $sqlState->execute([$email, $mp, $date]);
            // Redirection
            header('location: connexion.php');
        } else {
            ?>
            <div class="alert alert-danger" role="alert">
                Le login et le mot de passe sont obligatoires
            </div>
            <?php
        }

    }
    ?>
    <form method="post" autocomplete="off">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="login">

        <label class="form-label">Mot de passe</label>
        <input type="password" class="form-control" name="password"">

        <input type="submit" value="Ajouter utilisateur" class="btn btn-primary my-2" name="ajouter">
    </form>

    




<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>
</body>
</html>