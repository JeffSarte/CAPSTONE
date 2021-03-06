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
        
        
        <table class="table">   
    <thead class="thead-dark">
    
    <tr>     
        <th scope="col">School</th>
        <th scope="col">Email</th>
        <th scope="col">Number</th>
        <th scope="col">UserName</th>       
        <th scope="col">Password</th>   
        <th scope="col">Action</th>       
        </tr>
        <?php  include 'getaccreditor.php';?>
    </thead>
    </table>

    </tr>
  </thead>
  
  
</table>  

</div>

        </div>
    </div>
</div>


  
</body>
</html>