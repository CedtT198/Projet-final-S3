<?php 
$parcelle = TousParcelle();
if (isset($_GET['indasupp'])) {
  DeleteParcelle($_GET['indasupp']);
  header('Location:model.php?page=list-parcelle');
}
?>
<div class="container-fluid">
  <div class="row">

  <div class="container">
    <h2>Liste de parcelle(s)</h2>
  </div>

    <div class="table-responsive container">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Numéro parcelle</th>
            <th scope="col">Surface</th>
            <th scope="col">Thé présente dedans</th>
            <th scope="col">Poids présentes dans le parcelle</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <br>
          <?php foreach ($parcelle as $all_parcelle) { ?>
            <tr>
              <td><?php echo $all_parcelle['numeroParcelles'] ;?></td>
              <td><?php echo $all_parcelle['surface'] ;?></td>
              <td><?php echo $all_parcelle['idThe'] ;?></td>
              <td><?php echo $all_parcelle['poidsRestant'] ;?></td>
              <td>
                <a href="model.php?page=list-parcelle&indasupp=<?php echo $all_parcelle['numeroParcelles'];?>">
                    <button style="text-align: center; float: right;" type="button" class="btn btn-danger">Suprimer</button>
                </a>
                <!-- <a href="">
                    <button style="text-align: center; float: right;" type="button" class="btn btn-warning">Modifier</button>
                </a> -->
              </td>
            </tr>
          <?php } ?>
      </table>
    </div>

    <br>
    <div class="container">
      <a href="model.php?page=insert-parcelle">
          <button style="text-align: center; float: right;" type="button" class="btn btn-success">Insertion</button>
      </a>
  </div>
</div>