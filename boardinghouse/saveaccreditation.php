<?php 


        include '../include/conn.php';

        session_start();

                
       $ownerid =   $_SESSION['id'];
       $query = "SELECT * FROM boardinghouse WHERE bhouse_id = '$ownerid' ";

        $result = mysqli_query($conn,$query);
      
        
        while($row = mysqli_fetch_array($result))
        {
               $id = $row['id'] ;
        }
 
    $ids = $_POST['save'];
    $date = $_POST['date'];
            
    
 


    $query = "INSERT INTO accreditation (bhouse_id , accreditor_id ,date,status) values ('$id','$ids','$date',0)";

    mysqli_query($conn,$query);


   header('location:accreditors.php');
?>