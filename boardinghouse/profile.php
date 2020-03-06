<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
    <link rel="stylesheet" href="/css/boardinghouse.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css" >
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
    <h2>Welcome <?php echo $_SESSION["UserName"]; ?></h2>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-home"></i>&nbsp;Dashboard</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i>&nbsp;Profile</a></li>
            <li><a href="boarders.php"><i class="fas fa-address-card"></i>&nbsp;Boarders</a></li>
            <li><a href="accreditors.php"><i class="fas fa-project-diagram"></i>&nbsp;Apply accreditation</a></li>
            <li><a href="bhouse.php"><i class="fas fa-blog"></i>Boarding House</a></li>
            <li><a href="report.php"><i class="fas fa-address-book"></i>Report</a></li>
            <li><a href="logout.php"><i class="fas fa-map-pin"></i>Logout</a></li>
        </ul> 
       
    </div>
    <div class="main_content">

    <div class="header">
       
       <h1>Profile</h1>
        </div>  
        <div class="info">
    <div class="listbhouse">
        
        
    <?php


$ids = $_SESSION['id'];
include '../include/conn.php';


$query = "SELECT * from boardinghouseowner where id='$ids'" ;

$result = mysqli_query($conn,$query);


while($row = mysqli_fetch_array($result))
{
    
?>  
    <table border="1" class="table table-bordered mg-b-0">
                                                <tr>
        <th>Name</th>
        <td><?php  echo $row['FirstName'].'  '.  $row['MiddleName'].''. $row['LastName'];?></td>
    </tr>
    

    <tr>
        <th>Age</th>
        <td><?php  echo $row['Age'];?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php  echo $row['Gender'];?></td>
    </tr>

    <tr>
    <th>Number</th>
        <td><?php  echo $row['Number'];?></td>
        
    </tr>

    <tr>
    <th>UserName</th>
        <td><?php  echo $row['UserName'];?></td>
        
    </tr>


    <tr>
    <th>Password</th>
        <td><?php  echo $row['Password'];?></td>
        
    </tr>
    
    </table>    

    <form action="savebhouse.php" method="post">
       
    <input type="hidden" name="save" value="<?php echo $row['id'];?>" >
    <input type="hidden" name="saves" value="<?php echo $id = $_SESSION['id'];?>" >
    
    <button type="submit" class="btn btn-primary">Update</button>
    </form> 
   
   
<?php



}


?>


</div>


            
        </div>
    </div>
</div>


    <script src="../js/bhouse.js"></script>
</body>
</html>