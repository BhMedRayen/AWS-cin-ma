<?php 
// espace admin
include 'connexion.php';
$requete = $pdo->prepare('SELECT * FROM film');
$requete->execute();
$films=$requete->fetchAll();

$requete = $pdo->prepare('SELECT * FROM ticket');
$requete->execute();
$tickets=$requete->fetchAll();

if(array_key_exists('id_delete',$_GET))
{
    $id=$_GET['id_delete'];
    $requete3=$pdo->prepare('DELETE from film where id_film=:id');
    $requete3->execute(['id'=>$id]);
}


if(array_key_exists('id_delete_card',$_GET))
{
    $id=$_GET['id_delete_card'];
    $requete3=$pdo->prepare('DELETE from ticket where id_ticket=:id');
    $requete3->execute(['id'=>$id]);
}



include 'espaceadmin.phtml';
?>