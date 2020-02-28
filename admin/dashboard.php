
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-home"></i>&nbsp;Dashboard</a></li>
            <li><a href="boarder.php"><i class="fas fa-address-card"></i>&nbsp;Boarders</a></li>
            <li><a href="accreditor.php"><i class="fas fa-project-diagram"></i>&nbsp;Accreditors</a></li>
            <li><a href="bhouse.php"><i class="fas fa-blog"></i>Bhouse</a></li>
            <li><a href="report.php"><i class="fas fa-address-book"></i>Report</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Logout</a></li>
        </ul> 
       
    </div>
    <div class="main_content">
        <div class="header">
        </div>  
        <div class="info">
          <div class="bhouse">
          
          <div class="card" style="width: 15rem;">
            <div class="card-body">
                <h5 class="card-title">Boarders</h5>

                <?php 
                
                    include '../include/conn.php';

                    $result=mysqli_query($conn,"Select * from boarder");
                    $totalboarder = mysqli_num_rows($result);

                    ?>

            <h5 class="card-title"><?php echo $totalboarder; ?></h5>
            </div>
            </div>

          

          <div class="card" style="width: 15rem;">
            <div class="card-body">
                <h5 class="card-title">Accreditors</h5>

                <?php 
                
                    include '../include/conn.php';

                    $result=mysqli_query($conn,"Select * from accreditor");
                    $totalaccreditor = mysqli_num_rows($result);

                    ?>

            <h5 class="card-title"><?php echo $totalaccreditor; ?></h5>
            </div>
            </div>

          </div>
          </div>
        
        <div class="boarders">

         <div class="card" style="width: 15rem;">
            <div class="card-body">
                <h5 class="card-title">Boarding House</h5>
                <?php 
                
                include '../include/conn.php';

                $result=mysqli_query($conn,"Select * from boardinghouse");
                $totalboardinghouse = mysqli_num_rows($result);

                ?>

<h5 class="card-title"><?php echo $totalboardinghouse; ?></h5>
            </div>
            </div>
        
        </div>
        </div>
    </div>
</div>
</div>


    <script src="../js/bhouse.js"></script>
</body>
</html>