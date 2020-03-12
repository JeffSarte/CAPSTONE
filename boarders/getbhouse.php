<?php



include '../include/conn.php';



    $query = "SELECT * FROM boardinghouse";


    $result = mysqli_query($conn,$query);
  echo $id = $_SESSION['id'];
        
    while($row = mysqli_fetch_array($result))
    {
     
      
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">

        
        <?php echo "<img  src='../boardinghouse/bhouseimage/".$row['image']."'>"; ?>
      
      <form action="savebhouse.php">
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"> <?php echo $row['Name']; ?> </a> 
            </h4>
            <p class="card-text">Address : <?php echo $row['Address']; ?></p>
            <p class="card-text">Rent : <?php echo $row['Rent']; ?></p>
            <button type="submit">Save</button>
          </div>

          </form>

          
        </div>
      </div>
                
        <?php     
}


?>