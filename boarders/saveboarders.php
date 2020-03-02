<?php

    include '../include/conn.php';


    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $school = $_POST['school'];
    $status = $_POST['status'];
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
   

    

    
    $query = "INSERT into boarder (FirstName , MiddleName, LastName , Age,School,  Status ,
    UserName, Password, Gender,Number,Email)  values ('$fname', '$mname', '$lname' , 
    '$age', '$school' ,'$status' ,  '$username', '$password','$gender','$number','$email');";

       mysqli_query($conn,$query);
 

    header ('location:index.php');


?>