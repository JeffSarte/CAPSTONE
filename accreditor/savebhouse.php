<?php

        include '../include/conn.php';
    
    
    $accreditor = $_POST['saves'];
    $accreditation = $_POST['save'];
    $accredited = $_POST['accredited'];
    $owner  = $_POST['owner'];
    $date = $_POST['date'];

    

    echo $owner;

    echo $accreditor;

    echo $accreditation;
  
    echo $accredited;


    echo $date;

    

    $query = "UPDATE `accreditation` SET  bhouse_id = '$owner' , accreditor_id = '$accreditor' , date = '$date' , status = '$accredited' WHERE id = $accreditation";


    $result =     mysqli_query($conn, $query);

    if ($result)
    {
        echo 'data updated';
    } else {
        echo 'Not updated';
    }
    
   header('location:dashboard.php');



?>