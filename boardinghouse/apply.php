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
       
       <h1>School Accreditor</h1>
        </div>  
        <div class="info">
    <div class="listbhouse">

    <?php


include '../include/conn.php';


$id = $_GET['id'];




$query = "SELECT *  from accreditor where id = '$id'" ;

$result = mysqli_query($conn,$query);


while($row = mysqli_fetch_array($result))
{

?>  
<table border="1" class="table table-bordered mg-b-0">
                                            <tr>
    <th>School</th>
    <td><?php  echo $row['School'];?></td>
</tr>


<tr>
    <th>Email</th>
    <td><?php  echo $row['email'];?></td>
</tr>
<tr>
    <th>Number</th>
    <td><?php  echo $row['number'];?></td>
</tr>
<tr>    

<form action="saveaccreditation.php" method="post">

<th>Date</th>
<td><input type="date" name="date"></td>

</tr>

</table>    

   
<input type="hidden" name="save" value="<?php echo $row['id'];?>" >
<input type="hidden" name="saves" value="<?php echo $id = $_SESSION['id'];?>" >

<button type="submit" class="btn btn-primary">Apply</button>
</form> 


<?php

}

?>

       
</div>

        </div>
    </div>
</div>


  
</body>
</html>