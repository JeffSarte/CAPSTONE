<?php
include '../include/conn.php';

session_start();

if(count($_POST)>0) {
 
$result = mysqli_query($conn,"SELECT * FROM boardinghouseowner WHERE UserName='" . $_POST["username"] . "' and Password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["UserName"] = $row['UserName'];
}
}
if(isset($_SESSION["id"])) {
header("Location:dashboard.php");
}
?>