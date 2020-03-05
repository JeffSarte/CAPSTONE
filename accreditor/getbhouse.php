<?php



include '../include/conn.php';



    $query = "SELECT * FROM boardinghouse";


    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['Name']; ?></td> 
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Number']; ?></td>
                    
                    <td>

                    <a href="details.php?id=<?php echo $row['id'];?>"> View Details</a>
                </tr>
            </tbody>
            
        <?php     
}


?>