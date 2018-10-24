<?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && ($_POST['nom'] != '') && ($_POST['prenom'] != '') && ($_POST['age'] != '')){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    require('connexion.php');
    $requette = $pdo->prepare("INSERT INTO eleve(nom,prenom,age) VALUES(:nom, :prenom, :age)");
    $requette->bindParam(':nom', $nom);
    $requette->bindParam(':prenom', $prenom);
    $requette->bindParam(':age', $age);
    $requette->execute();
   
}
header('Location: list.php');