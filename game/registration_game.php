<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the users table.

$page_title = 'Create Game';

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('mysqli_connect_game.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['name_game'])) {
		$errors[] = 'You forgot to enter your first name.';//cambiar error
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['name_game']));
	}
    
    if (empty($_POST['pj_game'])) {
        $errors[] = 'You forgot to enter youre game.';//cambiar error
    } else {
        $p = mysqli_real_escape_string($dbc, trim($_POST['pj_game']));
    }

	// Check for an email address:
	if (empty($_POST['gm_name'])) {
		$errors[] = 'You forgot to enter your email address.';//cambiar error
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['gm_name']));
	}
	
	// Check for a password and match against the confirmed password:

	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO game (name_game, pj_game, gm_name) VALUES ('$fn', '$p', '$e')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered. In Chapter 12 you will actually be able to log in!</p><p><br /></p>';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.4
?>