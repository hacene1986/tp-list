<?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && ($_POST['nom'] != '') && ($_POST['prenom'] != '') && ($_POST['age'] != '')){
    require('connexion.php');
   // $id = $_GET['id'];
    $requette = $pdo->prepare("UPDATE  eleve SET nom=:nom, prenom=:prenom, age=:age WHERE id=:id"); 
    $requette->bindParam(':id', $_POST['id']);
    $requette->bindParam(':nom', $_POST['nom']);
    $requette->bindParam(':prenom', $_POST['prenom']);
    $requette->bindParam(':age', $_POST['age']);
    $requette->execute();
    var_dump($requette);
    
}
header('Location: list.php');