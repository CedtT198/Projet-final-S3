<?php 
$the = TousVarieteThe();
if (isset($_GET['indasupp'])) {
  DeleteVarieteThe($_GET['indasupp']);
  header('Location:model.php?page=list-variete');
}
?>

<div class="container-fluid">
  <div class="row">

  <div class="container">
    <h2>Liste de variété(s)</h2>
  </div>
    <div class="table-responsive container">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Variétes</th>
            <th scope="col">Occupation</th>
            <th scope="col">Rendement</th>
            <th scope="col">Prix de vente</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <br>
          <?php foreach ($the as $all_the) { ?>
            <tr>
              <td><?php echo $all_the['id'] ;?></td>
              <td><?php echo $all_the['variete'] ;?></td>
              <td><?php echo $all_the['occupation'] ;?></td>
              <td><?php echo $all_the['rendement'] ;?></td>
              <td><?php echo $all_the['prixvente'] ;?></td>
              <td>
                <a href="model.php?page=list-variete&indasupp=<?php echo $all_the['id'];?>">
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
      <a href="model.php?page=insert-variete">
          <button style="text-align: center; float: right;" type="button" class="btn btn-success">Insertion</button>
      </a>
  </div>
</div>