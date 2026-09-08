
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vente en ligne</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

        <meta charset="utf-8">
</head>
<body>
<?php include 'nav.php' 
?> 
        <?php
 
 require_once "pdo.php";
 require_once "session.php";
 Verifier_session();

                //id	email	nom	prenom	mp	etat	date_creation	date_modification
                $sql="SELECT id,email,nom,prenom,mp,etat, date_creation,date_modification from visiteur order by id desc";
                $res=$pdo->query($sql);
                
                ?>
<div class="col-md-6 col-xs-12 ">  
<div class="panel panel-info"> 
    <h1 class= 'panel-heading'>Liste des utilisateurs</h1>
    <div class= 'panel-body'> 
        

                <table border=1 class='table table-striped'>
                <tr> <td> ID </td><td>Nom</td> <td> Prénom </td> <td> mot de passe </td><td> etat </td><td>date_creation</td> <td> date_modification </td>
                  <?php foreach ($res as $row):?>
                           <tr>
                          <td><?=$row['id']?></td>
                          <td><?=$row['nom']?></td>
                          <td><?=$row['prenom']?></td>
                          <td><?=$row['mp']?></td>
                          <td><?=$row['etat']?></td>
                          <td><?=$row['date_creation']?></td>
                          <td><?=$row['date_modification']?></td>
                          <td><a href="supprimer_utilisateur.php?id_etd=<?php echo $row['id'];?>">Supprimer</a> 
                           <a href="modifier_utilisateur.php?id_etd=<?php echo $row['id'];?>">Modifier</a> </td>
                           </tr> <?php endforeach;?>                 
                </table>
                </div>   </div></div>



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