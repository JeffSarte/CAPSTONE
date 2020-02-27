<?php

    include '../include/conn.php';

    $name = $_POST['name'];
    $description = $_POST['description'];
    
    
    $query ="INSERT into boardinghouse (Name , Description) values ('$name', '$description');";

    mysqli_query($conn,$query);

    header('location:bhouse.php');
    
?>