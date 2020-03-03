<?php



include 'include/conn.php';



    $query = "SELECT * FROM boardinghouse";


    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
     
      
        ?>
        <div class="col-lg-4 col-sm-10 portfolio-item">
        <div class="card h-200">

        
        <?php echo "<img   src='../boardinghouse/bhouseimage/".$row['image']."'>"; ?>
         
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"> <?php echo $row['Name']; ?> </a> 
            </h4>
            <p class="card-text">Address : <?php echo $row['Address']; ?></p>
            <p class="card-text">Rent : <?php echo $row['Rent']; ?></p>
            <a href="details.php?id=<?php echo $row['id']; ?> " >View Details</a>
          </div>


          
        </div>
      </div>
                
        <?php     
}


?>