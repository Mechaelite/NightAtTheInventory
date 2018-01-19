<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{

    background-image: url(imagenes/dark-souls-ii-death.jpg);
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


<?php # Script 12.11 - logout.php #2
// This page lets the user logout.
// This version uses sessions.

session_start(); // Access the existing session.

// If no session variable exists, redirect the user:
if (!isset($_SESSION['id_game'])) {

	// Need the functions:
	require ('start_functions.inc.php');
	redirect_user('start_page.inc.php');	
	
} else { // Cancel the session:

	$_SESSION = array(); // Clear the variables.
	session_destroy(); // Destroy the session itself.
	setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0); // Destroy the cookie.

}

// Set the page title and include the HTML header:
$page_title = 'Leave it!';
redirect_user('ReadyForGame.php');
// Print a customized message:


?>

</body>
</html>
