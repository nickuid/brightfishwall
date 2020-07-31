<?php
session_start();
include("connection.php");
// Create connection
 
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
     
} 

if(empty($_POST["name"]) || empty($_POST["password"]))
{
}else{
// Define $username and $password
$name=$_POST['name'];
$password=$_POST['password'];
 
// To protect from MySQL injection
$name = stripslashes($name);
$password = stripslashes($password);
$name = mysqli_real_escape_string($db, $name);
$password = mysqli_real_escape_string($db, $password);
$password = md5($password);
 
//Check username and password from database
$sql="SELECT id FROM login WHERE name='$name' and password='$password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.
if(mysqli_num_rows($result) == 1)
{
$_SESSION['name'] = $name; // Initializing Session
echo "Login successful, redirecting to homepage.....</br>Click <a href='home.php'>here</a> if nothing happends";
header("Refresh: 3; home.php"); // Redirecting To Other Page
}else
{
echo "Incorrect username or password.";
}
 
}
?>