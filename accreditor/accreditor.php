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
        <h2>Accreditor</h2>
        <ul>
        <li><a href="dashboard.php"><i class="fas fa-home"></i>&nbsp;Home</a></li>
            
            <li><a href="accreditor.php"><i class="fas fa-project-diagram"></i>&nbsp;Accredited Bhouse</a></li>
            <li><a href="bhouse.php"><i class="fas fa-blog"></i>Bhouse</a></li>
            
            <li><a href="#"><i class="fas fa-map-pin"></i>Logout</a></li>
        </ul> 
       
    </div>
    <div class="main_content">
        <div class="header">
       
       <h1>Accredited Boarding House</h1>
        </div>  
        <div class="info">
    <div class="listbhouse">
        
    <table class="table table-bordered">   
    <thead class="thead-dark">
    
        <tr>     
        <th scope="col">BoardingHouse</th>
        <th scope="col">Address</th>  
        <th scope="col">Action</th>  
              
        </tr>
    <?php  include 'getbhouse.php';?>
    </thead>
    </table>
    </div>
    </tr>
  </thead>
  
  
</table>  




        </div>
    </div>
</div>


    
</body>
</html>