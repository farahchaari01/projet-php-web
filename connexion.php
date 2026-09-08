<?php
  session_start();
  if(isset($_SESSION['nom'])){
      header('location:index.php');
  }
  include "inc/function.php";
  $user = true;
  if(!empty($_POST)){
      $user = connectVisiteur($_POST);
      if( is_array($user) && count($user) > 0 ){
          if($user['etat'] == 0){
              session_start();
              $_SESSION['id'] = $user['id'];
              $_SESSION['email']= $user["email"];
              $_SESSION['nom']= $user["nom"];
              $_SESSION['prenom']= $user["prenom"];
              $_SESSION['mp']= $user["mp"];
              $_SESSION['etat'] = $user['etat'];
              header('location:index.php');
          }
          else{
              session_start();
              $_SESSION['id'] = $user['id'];
              $_SESSION['email']= $user["email"];
              $_SESSION['nom']= $user["nom"];
              $_SESSION['prenom']= $user["prenom"];
              $_SESSION['mp']= $user["mp"];
              $_SESSION['etat'] = $user['etat'];
              header('location:admin/profileAdmin.php');
          }
          
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.12/sweetalert2.min.css">
</head>
<body>
<?php include 'navCon.php' ?>
    <h1 class="text-center" >Connexion</h1>
    

<section >
  <div class="container py-5 mb-10">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="images/login.jpg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="connexion.php" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13"> Addresse Email</label>
            <input type="email" name="email" class="form-control form-control-lg" placeholder="Entrez votre addresse mail"/>
            <div id="emailHelp" class="form-text">(On ne partagera jamais votre e-mail)</div>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Mot de passe</label>
            <input type="password" name="mp" class="form-control form-control-lg" placeholder="Entrez votre mot de passe"/>
          </div>
          <!-- Submit button -->
          <p class="small fw-bold mt-2 pt-1 mb-3">Vous n'avez pas de compte ? <a href="registre.php">Créer compte</a></p>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Se connecter</button>
        </form>
      </div>
    </div>
  </div>
</section>

<br><br><br><br><br><br><br><br><br><br><br>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.12/sweetalert2.all.min.js"></script>

  <?php
if(!$user){
    echo "
    <script>
    Swal.fire({
        title: 'Erreur!',
        text: 'Cordonnées manquantes!',
        icon: 'error',
        confirmButtonText: 'Ok',
        timer : 2500,
      })
    </script>
    ";
}
?>
</body>

</html>