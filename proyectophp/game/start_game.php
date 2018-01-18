<?php # Script 12.8 - login.php #3
// This page processes the login form submission.
// The script now uses sessions.
// name_game, pj_game, gm_game
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Need two helper files:
	require ('../includes/start_functions.inc.php');
	require ('mysqli_connect_game.php');
		
	// Check the login:
	list ($check, $data) = check_login($dbc, $_POST['name_game'], $_POST['pj_game'], $_POST['gm_game']);
	
	if ($check) { // OK!
		
		// Set the session data:
		session_start();
		$_SESSION['id_game'] = $data['id_game'];
		
		
		// Redirect:
		redirect_user('../indexusr.php');
			
	} else { 
	// Unsuccessful!

		// Assign $data to $errors for login_page.inc.php:
		$errors = $data;

	}
		
	mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.

// Create the page:
include ('../includes/start_page.inc.php');
//esto esta correcto
?>