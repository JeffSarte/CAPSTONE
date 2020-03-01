<?php

    include '../include/conn.php';


    $query = "SELECT * FROM accreditor";

     $result = mysqli_query($conn, $query);


    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                    
                    <td><?php echo $row['School']; ?></td>
                    <td><?php echo $row['email'] ; ?></td> 
                    <td><?php echo $row['number'] ; ?></td> 
                    
                    <td><?php echo $row['UserName']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    
                    <td>

                    <form action="delaccreditor.php" method="POST">
                    
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