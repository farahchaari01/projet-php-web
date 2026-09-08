<?php
session_start();
include "../../inc/function.php";
    $idp=$_GET['id'];
    $produit = getProductBy($idp);
    $nom = $produit['nom'];
    $image = $produit['image'];
    $prix = $produit['prix'];
    $description = $produit['description'];
    $categorie = $produit['categorie'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Espace Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">La mode d'abord</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
    <a class="btn btn-outline-danger" href="../../deconnexion.php">Déconnexion</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../profileAdmin.php">
              <span data-feather="home"></span>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="listeProd.php">
              <span data-feather="file"></span>
              Produits
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../categorie/listeCa.php">
              <span data-feather="shopping-cart"></span>
              Catégories
            </a>
          </li>
        </ul>
      </div>
    </nav>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mise à jour du produit</h1>
        <div>
                <a href="listeProd.php" class="btn btn-outline-danger">Annuler</a>
        </div>
    </div>
    <form action="modifierProd.php" method="post">
            <table class='table table-striped'>
                <tr>  
                    <td>  
                        <label name="id"   ><h5> Produit :  <?php echo $idp; ?> </h5></label> 
                        <input type="hidden" name="id" value="<?php echo($idp)?>">  
                    </td>
                    <td></td>
                </tr>
                <tr> 
                    <td> 
                        <label> <span>Nom</span></label> 
                    </td>
                    <td>
                        <input type="text" name="nom" value="<?php echo($nom)?>">
                    </td> 
                </tr>
                <tr> 
                  <td> <span> Image </span>  
                    <input type="file" name="image"> 
                  </td>  
                  <td>
                    <img src= "../../images/<?php echo($image) ?>" width="50" height="50">
                  </td>  
                </tr>
                <tr> 
                    <td> 
                        <label> <span>Prix</span></label> 
                    </td>
                    <td>
                        <input type="text" name="prix" value="<?php echo($prix)?>">
                    </td> 
                </tr>
                <tr>
                    <td> 
                        <label> <span>Description </span></label>
                    </td>
                    <td>
                        <textarea type="text" name="description"> <?php echo($description) ?></textarea>
                    </td>
                </tr>
                <tr> 
                    <td> 
                        <label> <span>Catégorie</span></label> 
                    </td>
                    <td>
                        <input type="text" name="categorie" value="<?php echo($categorie)?>">
                    </td> 
                </tr>
                <tr>
                    <td> <button type="submit" class="btn btn-outline-success">Modifier</button> </td>
                    <td></td>
                </tr> 
            </table>
        </form>
        
    </main>
  </div>
</div>

    <script src="../../js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      <script>
      function popUpDeleteProduit(){
        return confirm("Voulez-vous vraiment supprimer le produit ?");
      }
    </script>
    </body>

</html>
