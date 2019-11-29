<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Breizh Food</title>
    <link rel="icon" href="<?= SHEET ?>img/Logo.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="<?= SHEET ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= SHEET ?>css/animate.css">
    <link rel="stylesheet" href="<?= SHEET ?>css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= SHEET ?>scss/magnific-popup.css">


    <link rel="stylesheet" href="<?= SHEET ?>fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= SHEET ?>fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= SHEET ?>fonts/flaticons/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?= SHEET ?>css/style.css">
  
  
    
    </head>
    <body id="page-top">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="<?= WEBROOT.'accueil' ?>">Breizh Food</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="<?= WEBROOT.'accueil' ?>">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?= WEBROOT.'produits' ?>" id="dropdown04">Nos produits</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04" >
                  <a class="dropdown-item" href="<?= WEBROOT.'produits/detail/1' ?>">Galettes</a>
                  <a class="dropdown-item" href="<?= WEBROOT.'produits/detail/2' ?>">Crêpes</a>
                  <a class="dropdown-item" href="<?= WEBROOT.'produits/detail/3' ?>">Pâtisseries</a>
                  <a class="dropdown-item" href="<?= WEBROOT.'produits/detail/5' ?>">Boissons alcoolisées</a>
                  <a class="dropdown-item" href="<?= WEBROOT.'produits/detail/4' ?>">Boissons</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= WEBROOT.'apropos' ?>">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= WEBROOT.'contact' ?>">Nous contacter</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="
                <?php
                if(isset($_SESSION['auteur']))
                    echo WEBROOT.'seconnecter/deconnect' ;
                else
                    echo WEBROOT.'seconnecter' ;
                 ?>
          ">
              <?php 
              if(isset($_SESSION['auteur']) && !empty($_SESSION['auteur'])) {
                    echo "Se d&eacute;connecter </a>"; 
              ?>              
               <div class="dropdown-menu" id="auteur" aria-labelledby="dropdown04" > 
                <a class="dropdown-item" href="<?=WEBROOT.'seconnecter/modifier'?>">modifier</a>
                <a class="dropdown-item" href="<?=WEBROOT.'seconnecter/ajouterblague'?>">ajouter une blague</a>
                <a class="dropdown-item" href="<?=WEBROOT.'seconnecter/commander'?>">commander</a>
                <a class="dropdown-item" href="<?=WEBROOT.'seconnecter/facture'?>">facture</a>
                </div>
              
              <?php
              } else 
                  echo "Se connecter </a>"; 
              ?>
           
            </ul>


            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="<?= WEBROOT.'panier' ?>">Panier
                <span id="total" class="badge badge-light"><?php  if (isset($_SESSION['panier'])){ if($_SESSION['totalpanier']!=0) echo $_SESSION['totalpanier']; }?></span>
                </a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    
    <!-- END header -->
    
    <?php 
    //var_dump($_SESSION); 
    //$_SESSION['test']==false;
    echo $content_for_layout 
?>
    



    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>A propos de</h3>
            <p class="mb-5">Entreprise de spécialitées Bretonne créer en 2010 par 3 chefs réputés à l'international.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="https://twitter.com/FoodBreizh?fbclid=IwAR3A8KbdbAZUQ-v1JNDv14XVRPnhe9Ot6dZMwq23XnZ4T2KjC0C8ZKZBSd0" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="https://www.facebook.com/Breizh-Food-121606805895607/?modal=admin_todo_tour" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="https://www.linkedin.com/in/breizh-food-04420a194/?fbclid=IwAR2TJD9Z3STUysI_i4alJftZYx74pHDpZaCitBSFjC_5Xxfah4w6TOnqKgI" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="https://www.instagram.com/breizh_food/?fbclid=IwAR3-5azfJQbPZPsdIGQiEpmRxbexvTHajr63qJuqvpBohjYp_s3vTtkicNc" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Heure d'ouverture</h3>
              <p><strong class="d-block">Du lundi au jeudi</strong>5 heures à 22 heures</p>
            </div>
            <div>
              <h3>Contact & Infos</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block">Adresse:</span>
                  <span class="text-white">Rue Saint-Michel35000 Rennes, France</span></li>
                <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">+33 2 09 09 09 09</span></li>
                <li class="d-block"><span class="d-block">Email:</span><span class="text-white">BreizhFood@outlook.fr</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Liens rapides </h3>
            <ul class="list-unstyled footer-link">
              <li><a href="<?= WEBROOT.'apropos' ?>">a propos</a></li>
              <li><a href="<?= WEBROOT.'contact' ?>">Contact</a></li>

            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Copyright © 2019 Tous droits réservés <i class="fa fa-heart" aria-hidden="true"></i>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="<?= SCRIPT ?>jquery-3.2.1.min.js"></script>
    <script src="<?= SCRIPT ?>popper.min.js"></script>
    <script src="<?= SCRIPT ?>bootstrap.min.js"></script>
    <script src="<?= SCRIPT ?>owl.carousel.min.js"></script>
    <script src="<?= SCRIPT ?>jquery.waypoints.min.js"></script>

    <script src="<?= SCRIPT ?>jquery.magnific-popup.min.js"></script>
    <script src="<?= SCRIPT ?>magnific-popup-options.js"></script>
    

    <script src="<?= SCRIPT ?>main.js"></script>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    
  </body>
</html>