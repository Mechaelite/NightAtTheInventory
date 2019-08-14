<?php # Script 3.4 - index.php
$page_title = 'Inventory';
include ('../../includes/header.html');
?>

<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../includes/newcss.css" type="text/css" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E"></script>
</head>
<body>


<div class="topnav">

	<a href="#">Logout</a>
</div>
<div class="container">
				<ul>
						<li><a href="../weapons/indexweapons.php">Weapons</a></li>
						<li><a href="../armor/indexarmor.php">Armor</a></li>
						<li><a class="active" href="indexmisc.php">Misc</a></li>
						
				</ul>

<div class="column">
		
		<div class="container3">
				<?php # Script 9.6 - view_users.php #2
// This script retrieves all the records from the users table.

$page_title = 'View the Current Games';

// Page header:

require ('../mysqli_connect_rolgame.php'); // Connect to the db.

// Make the query:
$q = "SELECT Item_ID,ItemName, ItemClass, ItemDescription, ItemPrice, ItemStock FROM misc";
$r = @mysqli_query ($dbc, $q); // Run the query.

// Count the number of returned rows:
$num = mysqli_num_rows($r);

if ($num > 0) { // If it ran OK, display the records.


		// Table header.
		echo '<table align="center" cellspacing="3" cellpadding="6" width="100%">
		<tr>
		<td align="center"><h2><b>Item ID</b></h2></td>
		<td align="center"><h2><b>Item Name</b></h2></td>
		<td align="center"><h2><b>Item Class</b></h2></td>
		<td align="center"><h2><b>Item Description</b></h2></td>
		<td align="center"><h2><b>Item Price </b></h2></td>
		<td align="center"><h2><b>Item Stock</b></h2></td>

		</tr>
';

		// Fetch and print all the records:
		while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
				echo 
				'<tr>
				<td align="center">' . $row['Item_ID'] . '</td>
				<td align="center">' . $row['ItemName'] . '</td>
				<td align="center">' . $row['ItemClass'] . '</td>
				<td align="center">' . $row['ItemDescription'] . '</td>
				<td align="center">' . $row['ItemPrice'] . '</td>
				<td align="center">' . $row['ItemStock'] . '</td>
				</tr>';
		}

		echo '</table>'; // Close the table.

		mysqli_free_result ($r); // Free up the resources.

} else { // If no records were returned.

		echo '<p class="error">There are currently no registered items.</p>';

}

mysqli_close($dbc); // Close the database connection.

?>
</div>
</div>
</div>
</div>
</div>


<?php
include ('../../includes/footer.html');
?>