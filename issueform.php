<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>issue</title>
    <link rel="stylesheet" href="./issue.css">
</head>
<body>

<form method = "POST" action="issue.php">

<h1>Issue Cartridge</h1>

<div class="textlabel">
  <label for="date">Date:</label>
</div>
<div class="textbox">
  <input type="date" name="date" >
</div>

<div class="textlabel">
  <label for="uname">Username:</label>
  </div>
<div class="textbox">
  <input type="text" name="uname" >
</div>

<div class="textlabel">
  <label for="cartridge model">cartridge model</label>
</div>
<div class="textbox">
  <select name="cmodelno" class="textbox">
          <option value="Model 1">Model 1</option>
          <option value="Model 2">Model 2</option>
          <option value="Model 3">Model 3</option>
  </select>
</div>
  <!-- <input type="text" id ="cartridge model" name="cmodel"> -->

<div class="textlabel">
  <label for="cartridge brand">cartridge brand</label>
</div>
<div class="textbox">
  <select name="cbrand" class="cbrand">
          <option value="Brand 1">Brand 1</option>
          <option value="Brand 2">Brand 2</option>
          <option value="Brand 3">Brand 3</option>
  </select>
  <!-- <input type="text" id = "cartridge brand" name="cbrand"> -->
  </div>

  <div>
  <input type="submit" value="Submit" class="Submit" name="issue_submit">
  </div>
</form> 

<!-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> -->

</body>
</html>
