<?php



include '../include/conn.php';


    $id = $_SESSION['id'];
    
    $query = "SELECT C.* FROM `boardinghouse` C JOIN boardinghouseowner B ON bhouse_id = c.bhouse_id where c.bhouse_id = '".$id ."' and b.id = '".$id ."'";

    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['Name']; ?></td> 
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Number']; ?></td>
                    <td><?php echo $row['Rent']; ?></td>
                    <td>

                    <form action="delbhouse.php" method="POST">
                    
                                        <button type="submit" class="btn btn-danger" name="id" value="<?php echo $row['id']; ?>" >Delete </button>
                                    </form>
                                    
                     <button 
                     type="submit" class="btn btn-danger  " <?php echo $row['id']; ?>>Edit</button></td>
                     
                     </td>
                </tr>
            </tbody>
            
        <?php     
}


?>