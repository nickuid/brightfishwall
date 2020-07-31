<?php
include("connection.php");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
$name = mysqli_real_escape_string($db,$_POST['name']);

$password = mysqli_real_escape_string($db,$_POST['password']);
$password = md5($password);
$sql="SELECT id FROM login WHERE name='$name'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) == 1){
    echo "User already exists, please choose a different username. <br/> Redirecting to loginscreen, click <a href='index.php'>here</a> if nothing happends";
    header("Refresh: 3; index.php"); 
} else {
 $sql = "INSERT INTO login (name, password) VALUES('$name', '$password');";
 $result = $db->query($sql);
if ($result) {
    echo "Registration complete, redirecting to loginscreen. </br>Click <a href='index.php'>here</a> if nothing happends";
    header("Refresh: 3; index.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
}
$db->close();
?>