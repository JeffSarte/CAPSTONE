<?php



include 'include/conn.php';



    $query = "SELECT * FROM boardinghouse";


    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
     
      
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">

        
        <?php echo "<img  src='../boardinghouse/bhouseimage/".$row['image']."'>"; ?>
         
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"> <?php echo $row['Name']; ?> </a> 
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
        </div>
      </div>
                
        <?php     
}


?>