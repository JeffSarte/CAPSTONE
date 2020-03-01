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
            <li><a href="bhouseowner.php"><i class="fas fa-blog"></i>Bhouse Owner</a></li>
            <li><a href="report.php"><i class="fas fa-address-book"></i>Report</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Logout</a></li>
        </ul> 
       
    </div>
    <div class="main_content">
        <div class="header">
       
        <h1>Bhouse Owner</h1>
        </div>  
        <div class="info">
          
        <div class="listbhouse">
            
        <table class="table">   
    <thead class="thead-dark">
    
        <tr>     
        <th scope="col">Name</th>
        <th scope="col">School</th>
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


<div id="modal">
    <div class="addbutton">
    <button type="button"  v-on:click="modal1 = true" class="btn btn-primary">Add Bhouse Owner</button>
    </div>
<div v-if="modal1">
<div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title">Add Bhouse Owner</h5>
                  <button class="close" type="button" @Click="close = true">
                  <span aria-hidden="true"> &times</span>
                  </button>
                </div>
                    <div class="modal-body p-4">
                        <form action="savebhouseowner.php" method="POST">
                        
                            <div class="form-group">
                             <input type="text" name="fname" class="form-control form-control-lg" 
                             placeholder="Firstname">
                            </div>
                            <div class="form-group">
                                <input type="text" name="mname" class="form-control form-control-lg" 
                                placeholder="Middlename">
                            </div>

                            <div class="form-group">
                                <input type="text" name="lname" class="form-control form-control-lg" 
                                placeholder="Lastname">
                            </div>

                            <div class="form-group">
                                <input type="text" name="age" class="form-control form-control-lg" 
                                placeholder="Age">
                            </div>
                           
                            <div class="form-group">
                                <input type="text" name="gender" class="form-control form-control-lg" 
                                placeholder="gender">
                            </div>

                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-lg" 
                                placeholder="username">
                            </div>

                            <div class="form-group">
                                <input type="text" name="password" class="form-control form-control-lg" 
                                placeholder="Password">
                            </div>

                            <div class="form-group">
                                <input type="text" name="number" class="form-control form-control-lg" 
                                placeholder="number">
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-info btn-block btn-lg">Add Bhouse Owner</button>
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