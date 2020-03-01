<?php

    include '../include/conn.php';
    $msg = "";
    $name = $_POST['name'];
    
   
    $description = $_POST['description'];

    $target = "bhouseimage/".basename($_FILES['image']['name']);
    $image  = $_FILES['image']['name'];
    echo $image ;
    
    $query ="INSERT into boardinghouse (Name , Description,image) values ('$name', '$description','$image');";

    mysqli_query($conn,$query);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
        $msg = "image upload";
        echo $msg;  
    
    }
    else
    {

        $msg = "not";
        echo $msg;
    }
   header('location:bhouse.php');
    
?>