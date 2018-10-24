<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <h1>Liste des éleves</h1>
    <a href="ajout.php"><button type="submit" class="btn btn-primary">Nouveau</button></a>
   <form method="POST" class="d-inline">
       <input type="text" name="search" placeholder="Search">
       <button type="submit" class="btn btn-success">OK</button>
   </form>
<?php
require('connexion.php');

?>
<div class="container">
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Age</th>
      <th>Supprimer</th>
      <th>Modifier</th>
    </tr>
  </thead>
  <tbody>
<?php
if(isset($_POST['search']) && $_POST['search'] != ''){
    $search = '%'.$_POST['search'].'%';
    $resultats = $pdo->prepare("SELECT * FROM eleve WHERE nom LIKE :search ORDER BY nom");
    $resultats->bindParam(':search',$search);
}else{
    $resultats = $pdo->prepare("SELECT * FROM eleve ORDER BY nom");
} 
$resultats->execute();
while($eleve = $resultats->fetch()){
    echo'<tr>';
    echo '<td>'.$eleve['nom'].'</td>';
    echo '<td>'.$eleve['prenom'].'</td>';
    echo '<td>'.$eleve['age'].'</td>';
    echo '<td><a href="supr.php?id='.$eleve['id'].'"><button class="btn btn-danger">Supprimer</button></a></td>';
    echo '<td> <a href="edit.php?id='.$eleve['id'].'"><button class="btn btn-success">Modifier</button></a></td>';
    echo'</tr>';

}
?>  
  </tbody>
</table>
</div>
</body>

</html>