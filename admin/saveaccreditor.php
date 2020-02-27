<?php
    include '../include/conn.php';

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $school = $_POST['school'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
   




    $query ="INSERT INTO `boarder`(`id`, `FirstName`, `MiddleName`, `LastName`, `Age`, `School`, `Status`, `UserName`, `Password`, `Gender`, `Number`, `Email`) 
    values ('$fname', '$mname', '$lname', '$age', '$school' ,'$status', 
    '$username', '$password',$gender' '$number' ,'$email');";

      mysqli_query($conn,$query);

      header ('location:boarder.php');  



?>