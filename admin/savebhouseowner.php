<?php

    include '../include/conn.php';

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    
    $query ="INSERT INTO boardinghouseowner (FirstName , MiddleName, LastName, Age, Gender, UserName, Password, Number) values ('$fname', '$mname', '$lname', '$age',
            '$gender', '$username', '$password', '$number'
    );";

    mysqli_query($conn,$query);

    header('location:bhouseowner.php');



    
   


?>