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
    <?php
    require('connexion.php');
  
    
    $resultats = $pdo->prepare("SELECT *  FROM eleve WHERE id = :id");
    $resultats->bindParam(':id',$_GET['id']);
    $resultats->execute();
    $pers = $resultats->fetch();
    //var_dump($pers);
    ?>
<div class="container">
    <form action="modif.php" method="POST">
    <input type="hidden" name="id" value="<?= $pers['id']?>">
        <div class="form-group">
            <label for="">Nom</label>
            <input class="form-control" type="text" name="nom" value="<?= $pers['nom'] ?>">
            <label for="">Prénom</label>
            <input class="form-control" type="text" name="prenom" value="<?= $pers['prenom'] ?>">
            <label for="">Age</label>
            <input class="form-control" type="number" name="age"  value="<?= $pers['age'] ?>">
            
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
</div>
</body>

</html>