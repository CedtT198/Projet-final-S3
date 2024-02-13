<?php 
$cueilleur = TousCueilleur();
if (isset($_GET['indasupp'])) {
  DeleteCueilleur($_GET['indasupp']);
  header('Location:model.php?page=list-cueilleur');
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
            <th scope="col">Genre</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Salaire</th>
            <th scope="col">Poids minimal</th>
            <th scope="col">Bonus</th>
            <th scope="col">Mallus</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <br>
          <?php foreach ($cueilleur as $all_cueilleur) { ?>
            <tr>
              <td><?php echo $all_cueilleur['id'] ;?></td>
              <td><?php echo $all_cueilleur['nom'] ;?></td>
              <td><?php echo $all_cueilleur['genre'] ;?></td>
              <td><?php echo $all_cueilleur['datenaissance'] ;?></td>
              <td><?php echo $all_cueilleur['salaire'] ;?></td>
              <td><?php echo $all_cueilleur['poidsminimal'] ;?></td>
              <td><?php echo $all_cueilleur['bonus'] ;?></td>
              <td><?php echo $all_cueilleur['mallus'] ;?></td>
              <td>
                <a href="model.php?page=list-cueilleur&indasupp=<?php echo $all_cueilleur['id'];?>">
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
      <a href="model.php?page=insert-cueilleur">
          <button style="text-align: center; float: right;" type="button" class="btn btn-success">Insertion</button>
      </a>
  </div>
</div>