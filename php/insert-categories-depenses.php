<?php 
$categorie = ToutsCategorieDepense();
?>
<!--services section start -->
<form action="traitement/InsertCategorieDepense.php" method="post">
  <div class="what_we_do_section layout_padding">
    <div class="container">
      <h1 class="what_taital">Catégorie dépenses</h1>
      <div class="what_we_do_section_2">
        <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-4.png"></div>
            <h3 class="accounting_text">Nom catégorie</h3>
            <div class="moremore_bt_1"><input type="text" name="CategorieDepense"  class="form-control"id="CategorieDepense" required placeholder="Entrez un nom"></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div style="text-align: center;">
    <div>
      <input class="btn btn-success" type="submit" value="Ajouter">
    </div>
  </div>
</form>