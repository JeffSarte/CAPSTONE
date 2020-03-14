<?php
    include '../include/conn.php';

    $id = $_SESSION['id'];


    echo $id;
    $query = "SELECT  reservation.id  , reservation.bhouseid ,boarder.Firstname ,  boarder.MiddleName , boarder.LastName    
    from reservation
    JOIN boarder on reservation.boardersid = boarder.id
   
    where reservation.bhouseid = '$id' ";
    $result = mysqli_query($conn,$query);
    
     while($row = mysqli_fetch_array($result))
    {
        ?>
            <tbody>
                <tr>
                
                    <td><?php echo $row['FirstName'].' '.$row['MiddleName'].' '.$row['LastName']; ?></td> 
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['School']; ?></td> 
                    <td><?php echo $row['Status']; ?></td>
                    <td><?php echo $row['UserName']; ?></td> 
                    <td><?php echo $row['Password']; ?></td>
                    <td><?php echo $row['Gender']; ?></td> 
                    <td><?php echo $row['Number']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    
                    <td class="text-right">

                    <form action="delboarder.php" method="POST">
                                        <button type="submit" class="btn btn-danger badge-pill" name="id" value="<?php echo $row['id']; ?>" >Delete </button>
                                    </form>
            </tbody>
            
        <?php     
}

?>


 
        


