<?php
if(isset($_GET['id']) && $_GET['id'] != ''){
    require('connexion.php');
    $id = $_GET['id'];
    $requette = $pdo->prepare("DELETE FROM eleve WHERE id = :id"); 
    $requette->bindParam(':id', $id);
    $requette->execute();
    header('Location: list.php');
    
}

