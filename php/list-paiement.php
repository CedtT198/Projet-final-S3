<?php 
require ('../../inc/function.php');
?> 

<!DOCTYPE html>
  <html lang="en">
    <head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Insertion cueillette</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../../assets/img/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../assets/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> -->
    <!-- owl stylesheets --> 
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen"> -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    </head>
<body>
  <!--header section start -->
  <div class="header_section">
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="model.php?page=depense">Dépense(s)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="model.php?page=cueillette">Cueillette(s)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="model.php?page=form-resultat">Résultat(s)</a> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="model.php?page=paiement">Paiement(s)</a> 
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

<div class="container-fluid">
  <div class="row">

    <div class="container">
        <h2>Liste de paiement(s)</h2>
      </div>
      
      <?php if (isset($_POST['datedebut']) && isset($_POST['datefin'])) { 
        $listePaiement = ListePaiementCueilleur($_POST['datedebut'], $_POST['datefin']);
        ?>
    <h2> <?php echo $_POST['datedebut'] ?>     -   <?php  echo $_POST['datefin']; ?></h2>
    <div class="table-responsive container">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Date</th>
            <th scope="col">Nom cueilleur</th>
            <th scope="col">Poids</th>
            <th scope="col">Bonus</th>
            <th scope="col">Mallus</th>
            <th scope="col">Montant Paiement</th>
          </tr>
        </thead>
        <br>
          <?php foreach ($listePaiement as $all_listePaiement) { ?>
            <tr>
              <td><?php echo $all_listePaiement['id'] ;?></td>
              <td><?php echo $all_listePaiement['daty'] ;?></td>
              <td><?php echo $all_listePaiement['nomCueilleur'] ;?></td>
              <td><?php echo $all_listePaiement['poids'] ;?></td>
              <td><?php echo $all_listePaiement['bonus'] ;?></td>
              <td><?php echo $all_listePaiement['mallus'] ;?></td>
              <td><?php echo $all_listePaiement['montantPaiement'] ;?></td>
            </tr>
          <?php } ?>
      </table>
    </div>
    <?php } else { ?>          
        <div class="container">
            <h1 class="what_taital">Aucun paiement(s) trouvé.</h1>
        </div>
    <?php } ?>
</div>


  <!--footer section start -->
  <div class="footer_section layout_padding" style="margin-top:50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <h1 class="what_taital" style="color:white;">Métier</h1>
          <div class="location_text"><span class="padding_left_15">Tsiry</span></div>
          <div class="location_text"><span class="padding_left_15">A62</span></div>
          <div class="location_text"><span class="padding_left_15">002723</span></div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h1 class="what_taital" style="color:white;">Intégration</h1>
          <div class="location_text"><span class="padding_left_15">Cedric</span></div>
          <div class="location_text"><span class="padding_left_15">A68</span></div>
          <div class="location_text"><span class="padding_left_15">002715</span></div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <h1 class="what_taital" style="color:white;">Affichage</h1>
          <div class="location_text"><span class="padding_left_15">Miora</span></div>
          <div class="location_text"><span class="padding_left_15">A125</span></div>
          <div class="location_text"><span class="padding_left_15">002599</span></div>
        </div>
      </div>
      <!-- copyright section start -->
      <div class="copyright_section">
        <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html  Templates</a></div>
      </div>
      <!-- copyright section end -->
    </div>
  </div>
  <!--footer section end -->
  <!-- Javascript files-->
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/jquery-3.0.0.min.js"></script>
  <script src="../../assets/js/plugin.js"></script>
  <!-- sidebar -->
  <script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../../assets/js/custom.js"></script>
  <!-- javascript --> 
  <script src="../../assets/js/owl.carousel.js"></script>
  <script src="saisieCueillette.js"></script>
  <!-- <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  -->
</body>
</html>