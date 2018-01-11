<!DOCTYPE html>
<html>
<style>
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
    background-image:url('includes/img/LOGIN_Trans.png');
    margin: 5% auto 10% auto; /* 5% from the top, 15% from the bottom and centered */
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

</style>
<body>

<h2></h2>
    <div class="btn-group">
        <button class="button1" onclick="document.getElementById('id01').style.display='block'">Login</button>
        <button class="button1" onclick="document.getElementById('id02').style.display='block'">Register</button>
    </div>
<div id="id01" class="modal">
    
<form class="modal-content animate" action="/" >
    
<div class="container2" >
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="includes/img/viking.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
    
    <label><b>Correo Electrónico</b></label>
      <input type="text" placeholder="Enter email" name="email" required>
        
      <label><b>Usuario</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Contraseña</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
        
        <button type="submit" href="ReadyForGame.html">Login</button>
      
      <input type="checkbox" checked="checked" > Remember me
    </div>
</div>
  </form>
</div>
    
<div id="id02" class="modal">
    
<form class="modal-content animate" action="USRRegister.php" method="post">
    
<div class="container2" >
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="includes/img/viking.png" alt="Avatar" class="avatar">
    </div>
    <div class="container1">

    
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="USRName" maxlength="20"
             value="<?php if (isset($_POST['USRName'])) echo $_POST['USRName']; ?>" required />
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="USRPassword" maxlength="40"
             value="<?php if (isset($_POST['USRPassword'])) echo $_POST['USRPassword']; ?>" required>
      <label><b>email</b></label>
      <input type="text" placeholder="Enter email" name="USREmail" maxlength="60" value= " <?php if (isset($_POST['USREmail'])) echo $_POST['USREmail'];?>" required>
        
    <div class="boxbutton">
        <button type="submit" name="submit" value="USRRegister" >Register</button></div>
      
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