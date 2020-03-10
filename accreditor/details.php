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
        <div class="header">

       <h1> Boarding House in Naga City </h1>
       
        </div>  
        <div class="info">
          
         <div class="listbhouse">
            
        
       
         <?php


                $ids = $_GET['id'];
                include '../include/conn.php';

               

                $query = "SELECT * from accreditation where id='$ids' " ;

                $result = mysqli_query($conn,$query);


                while($row = mysqli_fetch_array($result))
                {
                    
                ?>  
                    <table border="1" class="table table-bordered mg-b-0">
                                                                <tr>
                        <th>Date</th>
                        <td><?php  echo $row['date'];?></td>
                    </tr>

                    

                    <tr>
                        
                    </tr>
                    <tr>
                    
                    </tr>

                    <tr>
                    
                        
                    </tr>
                    
                    </table>    
                    
                    <form action="savebhouse.php" method="post">
                       
                    <input type="hidden" name="save" value="<?php echo $ids = $_GET['id'];;?>" >
                    <input type="hidden" name="saves" value="<?php echo $id = $_SESSION['id'];?>" >
                    <input type="hidden" name="owner" value="<?php echo $row['bhouse_id'];?>" >
                    <input type="hidden" name="date" value="<?php echo $row['date'];?>" >
                    <th>Status</th>
                        <td><select name="accredited" id="">
                            <option value="0"></option>
                            <option value="1">Accredited</option>   
                            <option value="2">Not Accredited</option>
                        </select></td>  
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form> 
                   
                   
                <?php


                
                }
                

?>



           
                                    </div>
                                   
                                </div>
                                
                        </div>
                            </div>
</div>



           
  

    
</body>
</html>