<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
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

body{
    background-image: url(includes/img/lichkingarthas-1513798342631-4293.jpg);
    height:absolute;
    width:98%%;
        
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
    background-image: url(includes/img/lichkingarthas-1513798342631-4293.jpg);
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
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
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
        <button class="button" onclick="document.getElementById('id01').style.display='block'">New Game</button>
        <button class="button" onclick="">Start Game</button>
        <button class="button" onclick="">Drop Game</button>
        <button class="button" onclick="">Search Game</button>
    </div>
</div>
    
<div id="id01" class="modal">
    
<form class="modal-content animate" action="/">
    
<div class="container1" >
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;
     </span>
    </div>
        
    <div class="container1">
        
      <label><b>New Game</b></label>
      <input type="text" placeholder="Select your name" name="game_name" maxlength="40"
             value="<?php if (isset($_POST['USRName'])) echo $_POST['game_name']; ?>" required />
      
        <label><b>Your PJ</b></label>  
      <input type="password" placeholder="Chose you pj name" name="pj_game" maxlength="40"
             value="<?php if (isset($_POST['pj_game'])) echo $_POST['pj_game']; ?>" required>
        
      <label><b>Rol</b></label>
      <input type="text" placeholder="Put your rol(Creator/Player)" name="gm_game" maxlength="60" value= " <?php if (isset($_POST['gm_game'])) echo $_POST['gm_game'];?>" required>
        
    <div class="boxbutton">
        <button type="submit" name="submit" value="Game_register" >Aceptar</button></div>
      
    </div>
</div>
</form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>