<?php

    include '../include/conn.php';

   
        $id = $_POST['id'];
        $query = "DELETE  FROM accreditor where id = '$id'";

        echo $id;
       
        $query_run = mysqli_query($conn,$query);


        
       
    header('location:accreditor.php');
    
    

?>  