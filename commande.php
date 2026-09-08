
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de vente en ligne</title>
</head>
<body>
<?php 
include 'nav.php' ;
?>


<div class="site-wrap">
    <header class="site-navbar" role="banner">

            
              
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children ">
              <a href="index.php">Home</a>
            </li>
            <li ></li>
            <li><a href="produits.php">Shop</a></li>
            <li><a href="commande.php active">Commandes</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Commandes</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Produit</th>
                    <th class="product-price">Prix</th>
                    <th class="product-remove">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Débardeur</h2>
                    </td>
                    <td>90DT</td>
                    
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/shoe_1.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Coratre</h2>
                    </td>
                    <td>250DT</td>
                    
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/cloth_2.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Chemise polo</h2>
                    </td>
                    <td>163DT</td>
                    
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/cloth_3.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Maquette de T-shirt</h2>
                    </td>
                    <td>75DT</td>
                    
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/shoe_2.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Baskets converse</h2>
                    </td>
                    <td>350DT</td>
                    
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/robe_2.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Robe</h2>
                    </td>
                    <td>450DT</td>
                    
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/combinaison1.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Combinaison</h2>
                    </td>
                    <td>300DT</td>
                    
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/chemiseEnf.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Chemise pour enfants</h2>
                    </td>
                    <td>60DT</td>
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/shoe_4.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Chaussures pour enfants</h2>
                    </td>
                    <td>100DT</td>
                    
                    <td><a href="ajouterCommande.php">Ajouter la commande</a></a></td>
                  </tr>
                  

                </tbody>
              </table>
            </div>
          </form>
        </div>
  
   
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