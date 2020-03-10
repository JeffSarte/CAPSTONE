<?php



include '../include/conn.php';

        $id = $_SESSION['id'];
            
        $query = "SELECT C.* FROM `accreditation` C JOIN accreditor B ON accreditor_id = c.accreditor_id where c.accreditor_id = '".$id ."' and b.id = '".$id ."'";

    

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