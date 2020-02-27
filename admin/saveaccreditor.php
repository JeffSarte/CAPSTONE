<?php
    include '../include/conn.php';

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $school = $_POST['school'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   




    $query = "INSERT into accreditor (FirstName,MiddleName,LastName,School,UserName,Password) 
    values ('$fname','$mname','$lname','$school','$username','$password')";

    mysqli_query($conn,$query);

?>