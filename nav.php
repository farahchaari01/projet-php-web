<?php
include "inc/function.php";
$categorie = getAllCategories();
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">LA MODE D'ABORD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
        if(!isset($_SESSION['nom'])){
          echo'
          <li class="nav-item">
          <a class="nav-link" href="connexion.php">Connexion</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registre.php">Registre</a>
        </li>
          ';
        }
      ?>

        <?php
                        if(isset($_SESSION['nom'])){
                            echo '
                            <a href="deconnexion.php" class="nav-link">Déconnexion</a>
                            ';
                        }
                ?>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
