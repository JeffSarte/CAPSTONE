<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
    <link rel="stylesheet" href="/css/accreditor.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
    <h2>Welcome <?php echo $_SESSION["UserName"]; ?></h2>
        <ul>
        <li><a href="dashboard.php"><i class="fas fa-home"></i>&nbsp;Dashboard</a></li>
            
            <li><a href="accreditor.php"><i class="fas fa-project-diagram"></i>&nbsp;Accredited Bhouse</a></li>
            <li><a href="bhouse.php"><i class="fas fa-blog"></i>Boarding House</a></li>
            
            <li><a href="logout.php"><i class="fas fa-map-pin"></i>Logout</a></li>
        </ul> 
       
    </div>

    <div class="main_content">
         
        <div class="info">
          <div class="bhouse">
          

    <div class="card" style="width: 15rem;">
            <div class="card-body">
                <h5 class="card-title">Accredited Boarding House</h5>

                <?php 
                
                    include '../include/conn.php';

                    $result=mysqli_query($conn,"Select * from boardinghouse ");
                    $totalboarder = mysqli_num_rows($result);

                    ?>

            <h5 class="card-title"><?php echo $totalboarder; ?></h5>
            </div>
            </div>  
            </div> 
            </div> 
            </div> 

</body>
</html>