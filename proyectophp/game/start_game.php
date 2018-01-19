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
	<div class="container">
	<?php # Script 12.8 - login.php #3
// This page processes the login form submission.
// The script now uses sessions.
// name_game, pj_game, gm_game
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Need two helper files:
	require ('start_functions.inc.php');
	require ('mysqli_connect_game.php');
		
	// Check the login:
	list ($check, $data) = check_login($dbc, $_POST['name_game'], $_POST['pj_game'], $_POST['gm_game']);
	
	if ($check) { // OK!
		
		// Set the session data:
		session_start();
		$_SESSION['id_game'] = $data['id_game'];
		
		
		// Redirect:
		redirect_user('started_up.php');
			
	} else { 
	// Unsuccessful!

		// Assign $data to $errors for login_page.inc.php:
		$errors = $data;

	}
		
	mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.

// Create the page:
include ('start_page.inc.php');
//esto esta correcto
?>
</div>
</body>

</html>
