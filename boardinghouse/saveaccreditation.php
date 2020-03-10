<?php 


        include '../include/conn.php';

       

    $id = $_POST['saves'];
    $ids = $_POST['save'];
    $date = $_POST['date'];
            
    
 


    $query = "INSERT INTO accreditation (bhouse_id , accreditor_id ,date,status) values ('$id','$ids','$date',0)";

    mysqli_query($conn,$query);


    //header('location:accreditors.php');
?>