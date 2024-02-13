<?php 
$categorie = ToutsCategorieDepense();
$parcelle = TousParcelle();
?>
<!--services section start -->
<form action="traitement/Saisiedepense.php" method="post">
  <div class="what_we_do_section layout_padding">
    <div class="container">
      <h1 class="what_taital">Dépenses</h1>
      <div class="what_we_do_section_2">
        <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-4.png"></div>
            <h3 class="accounting_text">Date</h3>
            <div class="moremore_bt_1"><input type="date"  class="form-control"name="date" id="date"></div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-2.png"></div>
            <h3 class="accounting_text">Choix catégorie</h3>
            <div class="moremore_bt_1">
              <select name="categorieDepense"  id="categorieDepense" class="form-control">
                <option>Catégorie</option>
                <?php foreach ($categorie as $categories) { ?>
                  <option value="<?php echo $categories["id"]; ?>"><?php echo $categories["nom"]; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-3.png"></div>
            <h3 class="accounting_text">Choix parcelle</h3>
            <div class="moremore_bt_1">
              <select name="choixParselle"  id="choixParselle" class="form-control">
                <option>Parcelle</option>
                <?php foreach ($parcelle as $parcelles) { ?>
                  <option value="<?php echo $parcelles["numeroParcelles"]; ?>"><?php echo $parcelles["numeroParcelles"]; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-1.png"></div>
            <h3 class="accounting_text">Montant</h3>
            <div class="moremore_bt_1"><input type="number" class="form-control" name="montant" placeholder="Entrer une valeur"></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
<br>
  <div style="text-align: center;" class="container">
    <div>
      <input class="btn btn-success form-control" type="submit" value="Ajouter">
    </div>
  </div>
</form>