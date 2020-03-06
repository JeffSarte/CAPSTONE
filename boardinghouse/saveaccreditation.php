<?php 


        include '../include/conn.php';


    $id = $_POST['save'];
    $ids = $_POST['saves'];
    $date = $_POST['date'];



   
    $query = "INSERT INTO accreditation (bhouse_id , accreditor_id ,date) values ('$id','$ids','$date')";

    mysqli_query($conn,$query);


    header('location:accreditors.php');
?>