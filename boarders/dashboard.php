<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Welcome <?php echo $_SESSION["UserName"]; ?></h2>



</div>
<div class="position"><a href="logout.php">Logout</a></div>
<?php
if($_SESSION["UserName"]) 
?>
</body>
</html>