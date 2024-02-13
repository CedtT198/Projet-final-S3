<?php 
$cueilleur = TousCueilleur();
$parcelle = TousParcelle();
?>       
<!--services section start -->
<form id="form">
  <div class="what_we_do_section layout_padding">
    <div class="container">
      <h1 class="what_taital">Cueillettes</h1>
      <!-- <p class="what_text">Remplissez</p> -->
      <div class="what_we_do_section_2">
        <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-4.png"></div>
            <h3 class="accounting_text">Date</h3>
            <div class="moremore_bt_1"><input type="date"  class="form-control"name="date" id="date"></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-2.png"></div>
            <h3 class="accounting_text">Choix cueilleur</h3>
            <div class="moremore_bt_1">
              <select name="choixCueilleur"  id="choixCueilleur" class="form-control">
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
        <div class="col-lg-3 col-sm-6">
          <div class="box_main">
            <div class="icon_1"><img src="../../assets/img/icon-4.png"></div>
            <h3 class="accounting_text">Poids cueilli</h3>
            <div class="moremore_bt_1"><input type="number"  class="form-control" name="poidCueilli" placeholder="Entrez poids"  id="poidCueilli"></div>
          </div>
        </div>
        
        <div class="col-lg-12 col-sm-12 col-md-12" style="text-align: center; "><br>
            <div>
              <input type="submit" value="Ajouter" class="btn btn-success form-control">
            </div>
            <div><br>
              <div id="verification"></div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
</form>