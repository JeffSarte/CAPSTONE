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
       
       <h1>Boarding House</h1>
        </div>  
        <div class="info">
    <div class="listbhouse">
        
        
        <table class="table">   
    <thead class="thead-dark">
    
        <tr>     
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Number</th>
        <th scope="col">Rent</th>
        <th scope="col">Action</th>        
        </tr>
    <?php  include 'getbhouse.php';?>
    </thead>
    </table>

    </tr>
  </thead>
  
  
</table>  

</div>

<div id="modal">
    <div class="addbutton">
    <button type="button"  v-on:click="modal1 = true" class="btn btn-primary">Add BoardingHouse</button>

    </div>
    <div v-if="modal1">
<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Add BoardingHouse Owner</h5>
                  <button class="close" type="button" @Click="close = true">
                  <span aria-hidden="true"> &times</span>
                  </button>
                </div>
                    <div class="modal-body p-4">
                        <form action="savebhouse.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                             <input type="text" name="name" class="form-control form-control-lg" 
                             placeholder="Name">
                            </div>

                            <div class="form-group">
                             <input type="text" name="address" class="form-control form-control-lg" 
                             placeholder="Address">
                            </div>

                            <div class="form-group">
                             <input type="text" name="number" class="form-control form-control-lg" 
                             placeholder="Mobile Number">
                            </div>
                            <div class="form-group">
                                <input type="text" name="rent" class="form-control form-control-lg" 
                                placeholder="Rent">
                            </div>

                            

                            <div class="form-group">
                                <input type="file" name="image" class="form-control form-control-lg" 
                                placeholder="Image">
                            </div>
                           
                           
                            
                            <div class="form-group">
                                <button class="btn btn-info btn-block btn-lg">Add BoardingHouse</button>
                            </div>
        
                        </form>
                    </div>
            </div>
            </div>
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