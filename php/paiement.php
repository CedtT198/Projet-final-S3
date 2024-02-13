<div class="container-fluid">
  <div class="container">
    <h1 class="what_taital">Paiement(s)</h1>
    <form action="list-paiement.php" method="post">
      <div class="container">
        <h3 class="accounting_text" style="color:black;">Date début</h3>
        <div class="input-group">
          <input type="date" name="datedebut" required class="form-control">
        </div><br>
        
        <h3 class="accounting_text" style="color:black;">Date fin</h3>
        <div class="input-group">
          <input type="date" name="datefin" required class="form-control">
        </div><br>

          <input type="hidden" name="page" value="" required class="form-control">
        
        <div class="input-group">
          <input class="btn btn-success form-control" style="font-size: 25px;" type="submit" value="Voir">
        </div><br><br>
      </div>
    </form>
  </div>
</div>