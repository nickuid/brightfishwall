<?php 
include("login.php");
if ((isset($_SESSION['username']) != '')) 
{
header('Location: home.php');
}
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Login the wall
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="nieuws">
        <h1 id="headertext">Demo voor Brightfish</h1>        
        <ul id="knop" class="knoppen">
            <li class="actief"><a href="#1">Login</a></li>
            <li><a href="#2">No account? Register an account!</a></li>
        </ul>
        <div id="1" class="paneel actief">
            <form action="login.php" method="post">
                <tr align="center">
                    <td colspan="3"><h2>User login</h2></td>
                </tr>
                <br>
                <tr>
                    <td align="right"><b>Name:</b></td>
                    <td><input type="text" name="name" required="required "/></td>
                </tr>   
                <br><br>
                <tr>
                    <td align="right"><b>Password:</b></td>
                    <td><input type="password" name="password" required="required"></td>
                </tr>
                <br><br>
                <tr align="center">
                    <td colspan="3">
                        <input type="submit" name="login" value="Login"/>
                    </td>
                </tr>
            </form>
        </div>
        <div id="2" class="paneel">
            <form action="registration.php" method="POST">
                <tr align="center">
                    <td colspan="3"><h2>User registration</h2></td>
                </tr>
                <br>
                <tr>
                    <td align="right"><b>Name:</b></td>
                    <td><input type="text" name="name" required="required "/></td>
                </tr>
                <br><br>   
                <tr>
                    <td align="right"><b>Password:</b></td>
                    <td><input type="password" name="password" required="required"></td>
                </tr>
                <br><br>
	            <tr align="center">
                    <td colspan="3">
                        <input type="submit" name="Register" value="Register"/>
                    </td>
                </tr>
            </form>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/tabPaneel.js"></script>
    </body>
</html>