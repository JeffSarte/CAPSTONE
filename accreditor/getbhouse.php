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
                    <td></td>
                   
                    <td>

                    <form action="getbhouse.php" method="POST">
                    
                                        <button type="submit" class="btn btn-danger" name="id" value="<?php echo $row['id']; ?>" >View </button>
                                    </form>
                     </td>
                </tr>
            </tbody>
            
        <?php     
}


?>