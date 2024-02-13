<?php 
$the = TousVarieteThe();
?>

<div class="container">
</div>
  <div style="text-align: center;">
    <h1 class="what_taital">Sauvegarde</h1>
    <form action="traitement/SauvegardeGenerationThe.php" method="post">
      <div id="check" class="container">
        <div class="top-row">
          <label><input type="checkbox" name="date[]" value="1">Jan</label> 
          <label><input type="checkbox" name="date[]" value="2">Fév</label>
          <label><input type="checkbox" name="date[]" value="3">Mars</label>
          <label><input type="checkbox" name="date[]" value="4">Avril</label>
          <label><input type="checkbox" name="date[]" value="5">Mai</label>
          <label><input type="checkbox" name="date[]" value="6">Juin</label>
        </div><br>

        <div class="bottom-row">
          <label><input type="checkbox" name="date[]" value="7">Juillet</label>
          <label><input type="checkbox" name="date[]" value="8">Août</label>
          <label><input type="checkbox" name="date[]" value="9">Sept</label>
          <label><input type="checkbox" name="date[]" value="10">Oct</label>
          <label><input type="checkbox" name="date[]" value="11">Nov</label>
          <label><input type="checkbox" name="date[]" value="12">Déc</label>
        <div>
<br>
        <div id="select" class="row">
          <select name="idThe"  id="idThe" required class="form-control">
            <option>Thé</option>
            <?php foreach ($the as $all_the) { ?>
              <option value="<?php echo $all_the["id"]; ?>"><?php echo $all_the["variete"]; ?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <br>
      <div id="submit" >
        <button type="submit" class="btn btn-success">Sauvegarder</button>
      </div>
    </div>
  </div>
</form> 