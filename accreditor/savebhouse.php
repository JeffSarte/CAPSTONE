<?php

        include '../include/conn.php';

    $accreditor = $_POST['saves'];
    $bhouse = $_POST['save'];
    $accredited = $_POST['accredited'];

    echo $accreditor;
    echo $bhouse;
     echo $accredited;

    $query  = "INSERT into  accreditedbhouse (accreditor_id ,bhouse_id ,status) values ('$accreditor','$bhouse','$accreditor');";

    mysqli_query ($conn,$query);


    header('location:dashboard.php');



?>