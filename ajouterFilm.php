<?php 
include 'connexion.php';
// ajout film
if(!empty($_POST))
{
    $nomfilm=$_POST['nom_film'];
    $realisateur=$_POST['realisateur'];
    $type=$_POST['type'];
    $description=$_POST['description'];
    $date=$_POST['date'];
    $heure=$_POST['heure'];
    $nbr_places=$_POST['nbr_places'];
    $datereal=$_POST['daterealisation'];
    $sql="INSERT into film (nom_film,realisateur,type,description,date,heure_projection,nbr_places,daterealisation) values(?,?,?,?,?,?,?,?)";
    $query=$pdo->prepare($sql);
    $query->execute([$nomfilm,$realisateur,$type,$description,$date,$heure,$nbr_places,$datereal]);
    header('location:espaceadmin.php');
    exit();
}
include 'ajouterFilm.phtml';
?>

