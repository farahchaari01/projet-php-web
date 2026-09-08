<div class="site-blocks-cover" style="background-image: url(images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">
              Trouvez vos chaussures parfaites</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Trouvez votre style! </p>
              <p>
                <a href="produits.php" class="btn btn-sm btn-primary">Achetez maintenant</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


        <div class="site-logo">
                    <img src="images/couverture.png" id="imgC" alt="couverture" width="1500" height="315"/>
        </div>

        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">La mode d'abord!</a>
              </div>
            </div>

//sweetalert :registre
<?php
if($showRegisterAlert){
    echo "
    
    Swal.fire({
      icon: 'success',
      title: 'Création compte avec succès',
      showConfirmButton: false,
      timer: 1500
    })
    
    ";
}
?>



//sweetalert :Connexion
<?php
if(!$user){
    echo "
    <script>
    Swal.fire({
        title: 'Erreur!',
        text: 'Cordonnées',
        icon: 'error',
        confirmButtonText: 'Ok',
        timer : 2000
      })
    </script>
    ";
}
?>