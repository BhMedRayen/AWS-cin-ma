<?php 
include 'connexion.php';

if(isset($_POST['edit']))
{
    $id=$_POST['id'];
    $nom_film=$_POST['nom'];
    $realisateur=$_POST['realisateur'];
    $type=$_POST['type'];
    $description=$_POST['description'];
    $date=$_POST['date'];
    $heure_projection=$_POST['heure_projection'];
    $nbr_places=$_POST['nbr_places'];
    $daterealisation=$_POST['daterealisation'];
    $requete2=$pdo->prepare("UPDATE film SET `nom_film`=:nom , `realisateur`=:realisateur ,`type`=:type ,`description`=:description, 
    `date`=:date,`heure_projection`=:heure_projection,`nbr_places`=:nbr_places,`daterealisation`=:daterealisation where id_film=:id");
    $requete2->execute([
         'id'=>$id,
         'nom'=>$nom_film,
         'realisateur'=>$realisateur,
         'type'=>$type,
         'description'=>$description,
         'date'=>$date,
         'heure_projection'=>$heure_projection,
         'nbr_places'=>$nbr_places,
         'daterealisation'=>$daterealisation
        ]);
    header("location:espaceadmin.php");
    exit;
}
$requete = $pdo->prepare('SELECT * FROM film where id_film=:id');
$requete->execute([
     'id'=>array_key_exists('id',$_GET) ? $_GET['id'] : $_POST['id']
]);
$film=$requete->fetch();
include 'update.phtml';
?>


