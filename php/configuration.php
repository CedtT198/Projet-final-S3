<?php 
$cueilleur = TousCueilleur();
?>

<div class="container">
</div>
  <div style="text-align: center;">
    <h1 class="what_taital">Configuration</h1>
    <form action="traitement/ConfigurationBonus.php" method="post">
        <div class="container">
            <div class="input-group">
                <select name="idCueilleurs"  id="idCueilleurs" class="form-control">
                    <option>Cueilleur</option>
                    <?php foreach ($cueilleur as $cueilleurs) { ?>
                        <option value="<?php echo $cueilleurs["id"]; ?>"><?php echo $cueilleurs["nom"]; ?></option>
                    <?php } ?>
                </select>
            </div><br>

            <div class="input-group">
                <input type="number" class="form-control" name="poidsMinimum" required placeholder="Entrez poids minimum">
            </div><br>
            
            <div class="input-group">
                <input type="number" class="form-control" name="bonus" required placeholder="Entrez bonus">
            </div><br>
            
            <div class="input-group">
                <input type="number" class="form-control" name="mallus" required placeholder="Entrez mallus">
            </div><br>
        </div>

      <div id="submit" >
        <button type="submit" class="btn btn-success">Sauvegarder</button>
      </div>
    </div>
  </div>
</form> 