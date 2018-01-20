<!Doctype html>
<html>
<head>
	<style>
	body{

    background-image: url(../imagenes/lichkingarthas-1513798342631-4293.jpg);
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
<?php   
# Script 12.1 - login_page.inc.php
// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Start';


// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}

// Display the form:
?>
<a href="ReadyForGame.php" class="button">Back to ReadyForGame</a>
<!-- <h1>Start</h1>
    <form action="../game/start_game.php" method="post">
    <p>Game name: <input type="text" name="name_game" size="20" maxlength="60" /> </p>
    <p>Character name: <input type="text" name="pj_game" size="20" maxlength="20" /></p>
    <p>Role: <input type="text" name="gm_game" size="20" size="20" maxlength="20" /></p>
    <p><input type="submit" name="submit" value="Start" /></p> -->
</form>
</center>
</body>
</html>