<?php
Session_start();
if(!isset($_SESSION["nom"])){
    header('location:connexion.php');
}
include "inc/function.php";
    $categorie = getAllCategories();
    if(isset($_POST['btn-mod'])){
      if(modifierAdmin($_POST)){
        $_SESSION['email']= $_POST["email"];
        $_SESSION['nom']= $_POST["nom"];
        $_SESSION['prenom']= $_POST["prenom"];
      } 
    }

?>
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
<?php 
include 'nav.php' ;
?>
<!--body-->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mt-4 p-5 ml-4 mr-4 ">
        <h2>Mise à jour du profile</h2>
        <div>
            <h6><?php echo $_SESSION['nom']." ".$_SESSION['prenom'];?></h6>
        </div>
    </div>
<div class="form-group p-5">

          <form action="profile.php" method="post">
            <input type="hidden" value="<?php echo $_SESSION['id']; ?>" name="id_admin">
            <div class="form-group mb-4">
                <input type="text" name="nom" class="form-control" value=" <?php echo $_SESSION['nom']; ?>">
            </div>
            <div class="form-group mb-4">
                <input type="text" name="prenom" class="form-control" value=" <?php  echo $_SESSION['prenom']; ?>">
            </div>
            <div class="form-group mb-4">
                <input type="email" name="email" class="form-control" value=" <?php  echo $_SESSION['email']; ?>">
            </div>
            <div class="form-group mb-4">
                <input type="password" name="mp" class="form-control" placeholder="Tapez votre nouveau mot de passe...">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" name="btn-mod" class="btn btn-outline-primary">Modifier</button>
            </div>
          </form>
</div>


<!--footer-->
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