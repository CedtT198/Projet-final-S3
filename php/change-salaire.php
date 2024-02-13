<?php 
$cueilleur = TousCueilleur();
?>
<!--services section start -->
<form action="traitement/UpdateSalaire.php" method="post">
  <div class="what_we_do_section layout_padding">
    <div class="container">
      <h1 class="what_taital">Changement salaire par kg d'un cueilleur</h1>
      <div class="what_we_do_section_2">
        <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-2.png"></div>
            <h3 class="accounting_text">Choix cueilleur</h3>
            <div class="moremore_bt_1">
              <select name="id"  id="id" class="form-control">
                <option>Cueilleur</option>
                <?php foreach ($cueilleur as $cueilleurs) { ?>
                  <option value="<?php echo $cueilleurs["id"]; ?>"><?php echo $cueilleurs["nom"]; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="../../assets/img/icon-1.png"></div>
              <h3 class="accounting_text">Nouveau salaire par kg</h3>
              <div class="moremore_bt_1"><input type="number" name="salaire" class="form-control" placeholder="Entrez nouveau salaire"  id="salaire" required></div>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>

  <div style="text-align: center;">
    <div>
      <input class="btn btn-warning" type="submit" value="Modifier">
    </div>
  </div>
</form>