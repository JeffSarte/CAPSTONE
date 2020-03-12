<?php
    include '../include/conn.php';


    $get_query = "SELECT * FROM boardinghouseowner ";
    $result = mysqli_query($conn,$get_query);
    
     while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName']; ?></td> 
                    <td><?php echo $row['Age']; ?></td> 
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Number']; ?></td>
                    <td><?php echo $row['UserName']; ?></td> 
                    <td><?php echo $row['Password']; ?></td>
                    
                    
                    <td class="text-right">

                    <form action="delowner.php" method="POST">
                                        <button type="submit" class="btn btn-danger badge-pill" name="id" value="<?php echo $row['id']; ?>" >Delete </button>
                                    </form>
            </tbody>
            
        <?php     
}


$output = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($output);

?>
        


