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

        <form action="" method="POST">

            <input type="text" name="id" placeholder="Search By Name">
                <div class="button">
                    <button type="submit" name="search"> Search</button>
                </div>

            </form>
        <h1>Admin</h1>
        </div>  
        <div class="info">
          
        <div class="listbhouse">
            
        <table class="table">   
    <thead class="thead-dark">
    
        <tr>     
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">School</th>   
        <th scope="col">Status</th>   
        <th scope="col">UserName</th>     
        <th scope="col">Password</th>      
        <th scope="col">Gender</th>   
        <th scope="col">Number</th>   
        <th scope="col">Email</th>   
        <th scope="col">Action</th>  
        </tr>
       
        <?php  include 'getboarder.php';?>
    </thead>
    </table>

    </tr>
  </thead>
  
  
</table>  
</div>


        </div>
    </div>
</div>


    <script src="../js/bhouse.js"></script>
</body>
</html>