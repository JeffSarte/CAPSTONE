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
                    <td><?php echo $row['Description']; ?></td>
                    
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