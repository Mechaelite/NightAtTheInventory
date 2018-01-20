<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{

    background-image: url(../imagenes/backfond.png);
    height:absolute;
    width:98%;
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
if (!isset($_SESSION['id_game'])) {

	// Need the functions:
	require ('start_functions.inc.php');
	redirect_user();	

}
$page_title = 'Start!';


// Print a customized message:
echo "<h1>Started Up!</h1>
<p>You are now Started up</p>";
?>
 <a href="../inventario/indexusr.php" class="button">Go to the inventory</a>
</div>
</center>
</body>
</html>