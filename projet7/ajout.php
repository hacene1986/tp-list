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
<div class="container">
    <form action="ajoutScript.php" method="POST">
        <div class="form-group">
            <label for="">Nom</label>
            <input class="form-control" type="text" name="nom">
            <label for="">Prénom</label>
            <input class="form-control" type="text" name="prenom">
            <label for="">Age</label>
            <input class="form-control" type="number" name="age">
            
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>
</body>

</html>