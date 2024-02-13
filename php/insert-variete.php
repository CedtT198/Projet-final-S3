<?php 
$categorie = ToutsCategorieDepense();
?>
<!--services section start -->
<form action="traitement/InsertionThe.php" method="post">
  <div class="what_we_do_section layout_padding">
    <div class="container">
      <h1 class="what_taital">Insertion variété de thé</h1>
      <div class="what_we_do_section_2">
        <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-2.png"></div>
            <h3 class="accounting_text">Variété</h3>
            <div class="moremore_bt_1"><input type="text"  class="form-control"name="variete" placeholder="Entrer unn nom de thé" required></div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-4.png"></div>
            <h3 class="accounting_text">Occupation</h3>
            <div class="moremore_bt_1"><input type="number" class="form-control" name="occupation" placeholder="Entrer une valeur" required></div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-1.png"></div>
            <h3 class="accounting_text">Rendement</h3>
            <div class="moremore_bt_1"><input type="number" class="form-control" name="rendement" placeholder="Entrer une valeur" required></div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-1.png"></div>
            <h3 class="accounting_text">Prix de vente</h3>
            <div class="moremore_bt_1"><input type="number" class="form-control" name="prixvente" placeholder="Entrer une prix de vente" required></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div style="text-align: center;" class="container">
    <div>
      <input class="btn btn-success form-control" type="submit" value="Ajouter">
    </div>
  </div>
</form>