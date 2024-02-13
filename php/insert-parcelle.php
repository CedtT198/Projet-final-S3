<?php 
$the = TousVarieteThe();
?>
<!--services section start -->
<form action="traitement/InsertParcelle.php" method="post">
  <div class="what_we_do_section layout_padding">
    <div class="container">
      <h1 class="what_taital">Insertion parcelle</h1>
      <div class="what_we_do_section_2">
        <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-1.png"></div>
            <h3 class="accounting_text">Num parcelles</h3>
            <div class="moremore_bt_1"><input type="number" name="numeroParcelles"  class="form-control" id="numeroParcelles" placeholder="Entre numéro de parcelle" required></div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-3.png"></div>
            <h3 class="accounting_text">Surface</h3>
            <div class="moremore_bt_1">
              <select name="surface"  id="surface"  class="form-control" required>
                <option>Surface</option>
                <?php for ($i=1; $i < 10; $i++) { ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-3.png"></div>
            <h3 class="accounting_text">Variété</h3>
            <div class="moremore_bt_1">
              <select name="idThe"  id="idThe" required class="form-control">
                <option>Thé</option>
                <?php foreach ($the as $all_the) { ?>
                  <option value="<?php echo $all_the["id"]; ?>"><?php echo $all_the["variete"]; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-4.png"></div>
            <h3 class="accounting_text">Poids restant</h3>
            <div class="moremore_bt_1"><input type="number" class="form-control" name="poidsRestant" id="poidsRestant" required placeholder="Entrez poids restant"></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div>
      <input class="btn btn-success form-control" type="submit" value="Ajouter">
    </div>
  </div>
</form>