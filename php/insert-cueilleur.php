  <!--services section start -->
  <form action="traitement/InsertionCueilleur.php" method="post">
    <div class="what_we_do_section layout_padding">
      <div class="container">
        <h1 class="what_taital">Insertion cueilleur</h1>
        <!-- <p class="what_text">Remplissez</p> -->
        <div class="what_we_do_section_2">
          <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="../../assets/img/icon-4.png"></div>
              <h3 class="accounting_text">Nom</h3>
              <div class="moremore_bt_1"><input type="text"  class="form-control"name="nom" required id="nom" placeholder="Entrez votre nom"></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="../../assets/img/icon-2.png"></div>
              <h3 class="accounting_text">Genre</h3>
              <div class="moremore_bt_1">
                <select name="genre"  id="genre" required class="form-control">
                  <option>Genre</option>
                  <option value="Homme">Homme</option>
                  <option value="Femme">Femme</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="../../assets/img/icon-4.png"></div>
              <h3 class="accounting_text">Date de naissance</h3>
              <div class="moremore_bt_1"><input type="date" class="form-control" name="datenaissance" id="datenaissance"  required></div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="box_main">
              <div class="icon_1"><img src="../../assets/img/icon-1.png"></div>
              <h3 class="accounting_text">Salaire par kg</h3>
              <div class="moremore_bt_1"><input type="number"  class="form-control"name="salaire" placeholder="Entrez montant"  id="salaire" required></div>
            </div>
          </div>
          
          <div class="col-lg-12 col-sm-12 col-md-12" style="text-align: center; "><br>
              <div>
                <input type="submit" value="Ajouter" class="btn btn-success form-control">
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>