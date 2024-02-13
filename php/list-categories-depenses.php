<?php 
$categorie_depense = ToutsCategorieDepense();
if (isset($_GET['indasupp'])) {
  DeleteCategorieDepense($_GET['indasupp']);
  header('Location:model.php?page=list-categories-depenses');
}
?>
<div class="container-fluid">
  <div class="row">

  <div class="container">
    <h2>Liste de cueilleur(s)</h2>
  </div>

    <div class="table-responsive container">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <br>
          <?php foreach ($categorie_depense as $all_categorie_depense) { ?>
            <tr>
              <td><?php echo $all_categorie_depense['id'] ;?></td>
              <td><?php echo $all_categorie_depense['nom'] ;?></td>
              <td>
                <a href="model.php?page=list-categories-depenses&indasupp=<?php echo $all_categorie_depense['id'];?>">
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
      <a href="model.php?page=insert-categories-depenses">
          <button style="text-align: center; float: right;" type="button" class="btn btn-success">Insertion</button>
      </a>
  </div>
</div>