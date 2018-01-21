<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

.container3 {
    width: 55%;
    height: 50%;
    text-align: center;
    padding: 50px 140px;
    color:#EAEDFD;
    border: #EAEDFD;
    float:left;

}

table, td, th {
    font-size: 25px;
    border: 3px solid #EAEDFD;
}

table {
    border-collapse: collapse;
    width: 100%;
}
tr
    {
        background-color: rgba(228,241,253,0.3);

    }
.btn-group .button{
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
.containerbutton {
    float: right;
    padding:70px 100px;
    width: 250px;
    height: 300px;
    background-color:rgba(19, 24, 22,0.5 );
    
    
    }
    
.btn-group .button:not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}
.btn-group .button:hover {
    background-color: firebrick;
}
/* Full-width input fields */
/* Set a style for all buttons */
button {
    background-color: darkred;
    color: white;
    padding: 14px 30px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    font-family:Luminari;
}
button:hover {
    opacity: 0.8;
}

span.psw {
    float: right;
    padding-top: 16px;
}
    .btn-group .button1{
    background-color: darkred; /* Green */
    border: 1px solid black;
    float: right;
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
.btn-group .button1:not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}
.btn-group .button1:hover {
    background-color: firebrick;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 12px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: content-box;
    position: relative;
    
}
/* Set a style for all buttons */
button {
    background-color: darkred;
    color: white;
    padding: 14px 20px;
    margin: 8px 8px;
    border: none;
    cursor: pointer;
    width: 40%;
    font-family:Luminari;
}
button:hover {
    opacity: 0.8;
}
body{
    background-image: url(../imagenes/lichkingarthas-1513798342631-4293.jpg);
    height:absolute;
    width:98%%;
        
}
/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.avatar {
    width: 30%;
    border-radius: 40%;
}
.form {
    
    border: 3px solid #f1f1f1;
    
    }
.container1 {
    width: 55%;
    height: 100%;
    text-align: center;
    padding: 50px 140px;
    
}
span.psw {
    float: right;
    padding-top: 16px;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 30px;
}
/* Modal Content/Box */
.modal-content {
    color: white;
    text-decoration-color: antiquewhite;
    background-size: contain;
    width: 727px;
    height: 900px;
    background-repeat: no-repeat;
    /* Could be more or less, depending on screen size */
}
/* The Close Button (x) */
.close {
    position: absolute;
    left: 25px;
    top: 0;
    color: rgb(228,241,253);
    font-size: 65px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #00D8FF;
    cursor: pointer;
}
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
/* Change styles for span and cancel button on extra small screens */
</style>
<body>

<h2></h2>
<div class="containerbutton">
    <div class="btn-group">
        <button class="button" onclick="document.getElementById('id01').style.display='block'">Manage Game</button>
        <button class="button" onclick="document.getElementById('id02').style.display='block'">Start Game</button>
        <button class="button" onclick="document.getElementById('id03').style.display='block'">Drop Game</button>
        <button class="button" onclick="document.getElementById('id04').style.display='block'">Search Game</button>
    </div>
</div>
    
<div id="id01" class="modal">
    
<form class="modal-content animate" action="registration_game.php" method="POST">
    
<div class="container1" >
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;
     </span>
    </div>
        
    <div class="container1">
        
      <label><b>Game Name</b></label>
      <input type="text" placeholder="Select your game name" name="name_game" maxlength="40"
             value="<?php if (isset($_POST['name_game'])) echo $_POST['name_game']; ?>" required />
      
        <label><b>Your Characater</b></label>  
      <input type="text" placeholder="Chose your character name" name="pj_game" maxlength="40"
             value="<?php if (isset($_POST['pj_game'])) echo $_POST['pj_game']; ?>" required>
        
      <label><b>Role</b></label>
      <input type="text" placeholder="Put your rol(Creator/Player)" name="gm_game" maxlength="60" value= " <?php if (isset($_POST['gm_game'])) echo $_POST['gm_game'];?>" required>
        
    <div class="boxbutton">
    <button type="submit" name="submit" value="Create game" >Done</button></div>
      <a href="registration_game.php" class="button"></a>
    </div>
</div>
</form>
</div>
<div id="id02" class="modal">
    <form class="modal-content animate" action="start_game.php" method="POST"> <!-- A completar el action-->
    
<div class="container1" >
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;
     </span>
    </div>
        
    <div class="container1">
        
      <label><b>Choose your game:</b></label>
      <input type="text" placeholder="Select your game name" name="name_game" maxlength="40"
             value="<?php if (isset($_POST['name_game'])) echo $_POST['name_game']; ?>" required />
      
        <label><b>Your Character name</b></label>  
      <input type="text" placeholder="Chose you character name" name="pj_game" maxlength="40"
             value="<?php if (isset($_POST['pj_game'])) echo $_POST['pj_game']; ?>" required>
        
      <label><b>Role</b></label>
      <input type="text" placeholder="Put your role(Creator/Player)" name="gm_game" maxlength="60" value= " <?php if (isset($_POST['gm_game'])) echo $_POST['gm_game'];?>" required>
        
    <div class="boxbutton">
        <button type="submit" name="submit" value="Start">Done</button></div>
        <a href="start_game.php" class="button"></a>
    </div>
</div>
</form>

</div>
</div>
<div id="id03" class="modal">
    <form class="modal-content animate" action="delete_game_test.php"> <!-- A completar el action-->
    
<div class="container1" >
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;
     </span>
    </div>
        
    <div class="container1">
        
      <label><b>Choose your game:</b></label>
      <input type="text" placeholder="Select your game name" name="name_game" maxlength="40"
             value="<?php if (isset($_POST['name_game'])) echo $_POST['name_game']; ?>" required />
      
        <label><b>Your Character name:</b></label>  
      <input type="password" placeholder="Chose you pj name" name="pj_game" maxlength="40"
             value="<?php if (isset($_POST['pj_game'])) echo $_POST['pj_game']; ?>" required>
        
      <label><b>Rol</b></label>
      <input type="text" placeholder="Put your rol(Creator/Player)" name="gm_game" maxlength="60" value= " <?php if (isset($_POST['gm_game'])) echo $_POST['gm_game'];?>" required>
        
    <div class="boxbutton">
        <button type="submit" name="submit" value="Game_register" >Done</button></div>
      
    </div>
</div>
</form>
</div>

<div id="id04" class="modal">
    <div class="container3">
        <?php # Script 9.6 - view_users.php #2
// This script retrieves all the records from the users table.

$page_title = 'View the Current Games';

// Page header:

require ('mysqli_connect_game.php'); // Connect to the db.

// Make the query:
$q = "SELECT name_game,pj_game,gm_game FROM game";
$r = @mysqli_query ($dbc, $q); // Run the query.

// Count the number of returned rows:
$num = mysqli_num_rows($r);

if ($num > 0) { // If it ran OK, display the records.


    // Table header.
    echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
    <tr><td align="center"><h2><b>Game Name</b></h2></td><td align="center"><h2><b>Player Name</b></h2></td><td align="center"><h2><b>Rol</b></h2></td></tr>
';

    // Fetch and print all the records:
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo 
        '<tr><td align="center">' . $row['name_game'] . '</td>
        <td align="center">' . $row['pj_game'] . '</td>
        <td align="center">' . $row['gm_game'] . '</td></tr>';
    }

    echo '</table>'; // Close the table.

    mysqli_free_result ($r); // Free up the resources.

} else { // If no records were returned.

    echo '<p class="error">There are currently no registered users.</p>';

}

mysqli_close($dbc); // Close the database connection.

?>
<span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;
     </span>
    </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>