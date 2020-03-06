
<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Istaran Boarding House MANAGEMENT</title>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">ISTARAN</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="Index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="boardinghouses.php">Boarding Houses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>    
          <li class="nav-item ">
            <a class="nav-link" href="boarders">Log In</a>
            </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 

  <!-- Page Content -->
  <div class="container">

    <!-- Marketing Icons Section -->

  
    
    <?php 


      $id = $_GET['id'];
      include './include/conn.php';


      $query = "SELECT * from boardinghouse where id='$id'" ;

      $result = mysqli_query($conn,$query);


      while($row = mysqli_fetch_array($result))
      {
        
        
          ?>
          <br>
          <br>
          <div class="col-lg-10  ">
          <div class="card h-300">

          
          <?php echo "<img   src='../boardinghouse/bhouseimage/".$row['image']."'>"; ?>
          
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"> <?php echo $row['Name']; ?> </a> 
              </h4>
              <p class="card-text">Address : <?php echo $row['Address']; ?></p>
              <p class="card-text">Rent : <?php echo $row['Rent']; ?></p>

          <div id="details">
              <button @Click ="rent=true ,detail=false ,name=false">Rent</button>
              <button @Click="detail=true ,rent=false ,name=false"> Details</button>
              <button @Click="name=true, rent=false , detail=false">Name</button>

            <div v-if="rent">
              <div class="card" style="width: 50rem;">
                <div class="card-body">
                <p class="card-text">Rent : <?php echo $row['Rent']; ?></p>
                  <p class="card-text">ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas</p>
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  
                  
                </div>
              </div>
              </div>


            <div v-if="detail">
              <div class="card" style="width: 50rem;">
                <div class="card-body">
                <p class="card-text">Address : <?php echo $row['Address']; ?></p>
                <p class="card-text">ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas</p>
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                </div>
              </div>

              </div>
        

        <div v-if="name">
              <div class="card" style="width: 50rem;">
                <div class="card-body">
                <p class="card-text">Name : <?php echo $row['Name']; ?></p>
                <p class="card-text">ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas</p>
                  ahsdasdasahsdasdasahsdasdasahsdasdasahsdasdas
                </div>
              </div>
            </div>
            </div>

            </div>



          </div>
        </div>
                  
          <?php     
      }




?>
    
  <script type="text/javascript" src="js/bhouse.js"></script>
    
 
    <!-- Call to Action Section -->
    <div class="row mb-3">
      <div class="col-md-3">
      
    </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    
  </footer>


</body>

</html>


   
