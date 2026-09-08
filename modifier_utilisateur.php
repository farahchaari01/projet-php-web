<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vente en ligne</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
 require_once "pdo.php";
 require_once "session.php";
 Verifier_session();

/* récupération des données du formulaire */
$id_etd=$_GET['id_etd'];

                //id	email	nom	prenom	mp	etat	date_creation	date_modification
try{                          
    $req="SELECT * FROM visiteur where id='$id_etd'";
    $res=$pdo->query($req);
    $data=$res->fetchAll(PDO::FETCH_ASSOC);
    if (count($data)===1){
        $fname=$data[0]["nom"];
        $lname=$data[0]["prenom"];
        $mp=$data[0]["mp"];
        $date_creation=$data[0]["date_creation"];
        $date_modification=$data[0]["date_modification"];        
    }
} catch(PDOException $e){
    echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
}


?>

<fieldset>
                <legend>Modifier un utilisateur</legend>
               
                <form action="modif.php" method="post" enctype="multipart/form-data">
                    <table class='table table-striped'>

            <tr>    <label name="id"   >Utilisateur : <?php echo $id_etd; ?> </label> <input type="hidden" name="id" id="id" value="<?php echo($id_etd)?>">  </tr>
                
            <tr> <td> <label for="fname">Nom :</label> </td><td><input type="text" name="fname" id="fname" value="<?php echo($fname)?>"></td>  </tr>
            <tr><td> <label for="lname">Prénom :</label></td><td><input type="text" name="lname" id="lname" value="<?=$lname?>"> </tr></td>
            <tr> <td>  <label for="">Mot de passe</label> </td><td><input type="password" name="mp" id="mp" value="<?=$mp?>"> </tr></td>
        <select name="date_modification" id="date_modification">
            <?php 
                $date = date('Y-m-d');
                for($a=1950;$a<=$year;$a++)

                   if($a==$an_naissance)
                        echo "<option value='$a' selected>$a</option>";
                    else
                    echo "<option value='$a'>$a</option>";
            ?> 
        </select>  </td></tr>
       


       <table>
       
        <input type="submit" name="Envoyer" value="Envoyer">                          
    </form>

</fieldset>

<footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Vente en ligne</a></li>
                  <li><a href="#">Caractéristiques</a></li>
                  <li><a href="#">Carte de shopping</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point de vente</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Trouvez vos chaussures parfaites</h3>
              <p>Promo de BlackFridays</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Infos de contact</h3>
              <ul class="list-unstyled">
                <li class="address">39 Rue de Habib Maazoun, Sfax 3000</li>
                <li class="email">boutiqueshoppers1@gmail.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">S'abonner</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

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
