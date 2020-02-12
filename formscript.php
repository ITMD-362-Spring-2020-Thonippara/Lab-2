<?php

//Make short variable names
$firstName = $_REQUEST['first_name_field'];
$lastName = $_REQUEST['last_name_field'];
$date = $_REQUEST['dob_field'];
$email = $_REQUEST['email_field'];
$phone = $_REQUEST['phone_field'];

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Response Summary</title>
    <style>
		.box {
			border: 1px solid #444;
			background-color: #ccc;
			margin: 20px 20px;
			padding: 5px 20px;
		}
    </style>
  </head>
  <body>
	<div style="text-align:center;">
    <h1>Response Summary</h1>
    <p>This page will display the results of the form that was submitted to it.</p>
    </div>
    <h1>Thank you for your submission, <?php echo htmlentities($firstName) ?>!</h1>
	<div class="box">
    <h2>This section contains the information provided in the Contact Info section:</h2>
    <p><strong>First Name:</strong> <?php echo htmlentities($firstName) ?></p>
		<p><strong>Last Name:</strong> <?php echo htmlentities($lastName) ?></p>
    <p><strong>Date of Birth:</strong> <?php echo htmlentities($date) ?></p>
    <p><strong>Email Address:</strong> <?php echo htmlentities($email) ?></p>
		<p><strong>Phone Number:</strong> <?php echo htmlentities($phone) ?></p>
	</div>
</body>
</html>
