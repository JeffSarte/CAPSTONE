<?php



include '../include/conn.php';



    $query = "SELECT * FROM accreditedbhouse  ";


    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
      
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['accreditor_id']; ?></td> 
                    <td><?php echo $row['bhouse_id']; ?></td>

           
                    
                    <td>
                    
                    <?php echo $row['status']; ?></td>
               

                   <td> <a href="details.php?id=<?php echo $row['id'];?>"> View Details</a></td>
                </tr>
            </tbody>
            
        <?php     
}


?>