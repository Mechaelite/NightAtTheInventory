<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{

    background-image: url(imagenes/lichkingarthas-1513798342631-4293.jpg);
    height:absolute;
    width:98%%;
    color: white;
        
	}
	.container {
    float: center;
    padding:70px 100px;
    width: 250px;
    height: 300px;
    background-color:rgba(19, 24, 22,0.5 )
    }
    .button{
    background-color: darkred; /* Green */
    border: 1px solid black;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    width: 250px;
    display: block;
}
</style>
</head>
<body>
	<center>
	<div class="container">
	<?php # Script 12.9 - loggedin.php #2
// The user is redirected here from login.php.

session_start(); // Start the session.

// If no session value is present, redirect the user:
if (!isset($_SESSION['USRID'])) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	

}

// Set the page title and include the HTML header:
$page_title = 'Logged In!';


// Print a customized message:
echo "<h1>Logged In!</h1>
<p>You are now logged in, {$_SESSION['USRName']}!</p>
<p><a href=\"logout.php\">Logout</a></p>";
?>
 <a href="./game/ReadyForGame.php" class="button">Ready for game</a>
 </div>

</center>
</body>
</html>