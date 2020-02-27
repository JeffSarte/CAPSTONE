<?php

    include '../include/conn.php';


    $query = "SELECT * FROM accreditor";

     $result = mysqli_query($conn, $query);


    while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['FirstName'] .' '.$row['MiddleName']. ' '.$row['LastName']; ?></td> 
                    <td><?php echo $row['School']; ?></td>
                    <td><?php echo $row['UserName']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    
                    <td>

                    <form action="d.php" method="POST">
                    
                                        <button type="submit" class="btn btn-danger" name="id" value="<?php echo $row['id']; ?>" >Apply </button>
                                    </form>
                                    
                     
                     </td>
                </tr>
            </tbody>
            
        <?php     
}


?>