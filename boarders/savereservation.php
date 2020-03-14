<?php

    include '../include/conn.php';



     $boarderid = $_POST['boarderid'];
    $bhouseid = $_POST['bhouseid'];

 

    
     $query = "INSERT INTO reservation (boardersid , bhouseid) values ('$boarderid','$bhouseid');";


     mysqli_query($conn,$query);
 

   header ('location:dashboard.php');


?>