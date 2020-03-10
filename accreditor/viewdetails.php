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
        <div class="header">

       <h1> Boarding House in Naga City </h1>
       
        </div>  
        
       
        <?php 


      $id = $_GET['id'];
      include '../include/conn.php';


      $query = "SELECT * from boardinghouse where id='$id'" ;

      $result = mysqli_query($conn,$query);


      while($row = mysqli_fetch_array($result))
      {
        
        
          ?>
          <br>
          <br>
          
          
          <?php echo "<img   src='../boardinghouse/bhouseimage/".$row['image']."'>"; ?>
          
           
              <h4 >
                <a href="#"> <?php echo $row['Name']; ?> </a> 
              </h4>
              <p >Address : <?php echo $row['Address']; ?></p>
              <p >Rent : <?php echo $row['Rent']; ?></p>

          
                  
          <?php     
      }




?>
    
  <script type="text/javascript" src="js/bhouse.js"></script>

</div>

</div>
</div>

    
</body>
</html>