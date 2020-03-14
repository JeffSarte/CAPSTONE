<?php



include '../include/conn.php';

        $id = $_SESSION['id'];
            
        // $query = "SELECT C.* FROM `accreditation` C JOIN accreditor B ON accreditor_id = c.accreditor_id where c.accreditor_id = '".$id ."' and b.id = '".$id ."'";


       
        $query = "SELECT  accreditation.id , accreditation.status , boardinghouse.Name , boardinghouse.Address ,accreditor.School
            from accreditation
            JOIN boardinghouse on accreditation.bhouse_id = boardinghouse.id
            JOIN accreditor ON accreditation.accreditor_id = accreditor.id
            where accreditor.id = $id ";

    $result = mysqli_query($conn,$query);

        
    while($row = mysqli_fetch_array($result))
    {
      
        ?>
            <tbody>
                <tr>
                
                    
                    <td><?php echo $row['Name']; ?></td>

                    <td><?php echo $row['Address']; ?></td>
 
                    <td>
                    
                    <?php 
                    
                    
                    if ($row['status'] == 1)
                    {

                   
                    
                    echo ' Not Accredited'; 
                } else
                {
                    echo 'accredited';
                }
                
                    
                    
                    ?></td>
               

                   <td> <a href="details.php?id=<?php echo $row['id'];?>"> View Details</a></td>
                </tr>
            </tbody>
            
        <?php     
}


?>