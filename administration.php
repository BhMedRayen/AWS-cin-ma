<?php 
include 'connexion.php';
// administration
if(isset($_POST['login'])){

    extract($_POST);
    $sql="SELECT * FROM adminstra where email='$email'";
    $query = $pdo->query($sql);
    $admin=$query->fetch();
    if($admin){
        if($admin['password']!=$password){
                header("location:administration.php?msg=password  incorrect");
                exit;

        }else{
            header("location:espaceadmin.php");
        }
    }else{
        header("location:administration.php?msg=password or email incorrect");
    }
}

include 'administration.phtml';
?>