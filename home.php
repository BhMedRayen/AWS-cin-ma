<?php
// home
  include 'connexion.php';
  $requete = $pdo->prepare('SELECT * FROM film');
  $requete->execute();
  $films=$requete->fetchAll();
  include 'home.phtml';
?>