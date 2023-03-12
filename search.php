<?php
// search
     if(isset($_POST['search']))
     {
     $search_box = $_POST['search'];
     $select_products = $conn->prepare("SELECT * FROM film WHERE name LIKE '%{$search}%'"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
      }}}
   ?>
