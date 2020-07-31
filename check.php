<?php
include("connection.php");
session_start();

$user_check=$_SESSION['name'];
 
$sql = mysqli_query($db,"SELECT name FROM login WHERE name='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['name'];
 
if(!isset($user_check))
{
header("Location: index1.php");
}
?>