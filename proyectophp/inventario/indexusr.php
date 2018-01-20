<?php # Script 3.4 - index.php
$page_title = 'Inventory';
include ('../includes/header.html');
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../includes/newcss.css" type="text/css" media="screen">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E"></script>
</head>
<body>


<div class="topnav">

  <a href="#">Logout</a>
</div>
<div class="container">
        <ul>
            <li><a href="weapons/indexweapons.php">Weapons</a></li>
            <li><a href="armor/indexarmor.php">Armor</a></li>
            <li><a href="misc/indexmisc.php">Misc</a></li>
            
        </ul>

<div class="column">

<h2>If u want see our inventory go to Wepons, Armor Or Misc</h2>

</div>
</div>

<?php
include ('../includes/footer.html');
?>