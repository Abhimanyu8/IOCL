<?php
include ('connection.php');
?>

!<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>return</title>
    <link rel="stylesheet" href="./return.css">
</head>

<body>


<form action="return.php" method="POST">
<h1>Return Cartridge</h1>

<div class="textlabel">
  <label for="rerturn date">Return date:</label>
</div>
<div class="textbox">
  <input type="date" name='rdate'>
</div>

<div class="textlabel">
  <label for="user name">Username:</label>
</div>
<div class="textbox">
  <input type="text" name='uname'>
</div>

<div class="textlabel">
  <label for="cartridgeinfo">Scan Catridge</label>
</div>
<div class="textbox">
  <input type="text" name='cinfo'>
</div>

<div>
  <input type="submit" class="Submit" value="Submit" name="Submit">
</div>
</form> 
<!-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> -->

</body>
</html>
