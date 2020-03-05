<?php


$id = $_GET['id'];
include '../include/conn.php';


$query = "SELECT * from boardinghouse where id='$id'" ;

$result = mysqli_query($conn,$query);


while($row = mysqli_fetch_array($result))
{

    
}


?>