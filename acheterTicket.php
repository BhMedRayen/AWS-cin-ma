<?php 
include 'connexion.php';
if(!empty($_POST))
{
    $nom_film=$_POST['nom_film'];
    $nom_client=$_POST['nom_client'];
    $nombre_places=$_POST['nombre_places'];
    $cc_number=$_POST['cc_number'];
    $sql="INSERT into ticket (nom_client,nombre_places,cc_number,film)values(?,?,?,?)";
    $query=$pdo->prepare($sql);
    $query->execute([$nom_client,$nombre_places,$cc_number,$nom_film]);
    if($query)
    {
        header("location:acheterTicket.php?msg=Achat effectue");
        exit();
    }
    
}
include 'acheterTicket.phtml';
?>
