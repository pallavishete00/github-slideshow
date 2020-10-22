<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

	<h1>Thank you!</h1>
	
	<p> <?php echo $_POST["Title"]." ".$_POST["Firstname"]." ".$_POST["Lastname"]; ?>

	<p>You have submitted the following details:</p>	
	
	<p>Your Birth Date is: <?php echo $_POST["birthday"]; ?></p>
	
	<p>Your phone number is: <?php echo $_POST["phone"]; ?></p>
	
	<p>Your Uploaded file is: <?php echo $_POST["myfile"]; ?></p>
	
	<p>Your Message is: <?php echo $_POST["Message"]; ?></p>
	
	<p>Your email address is: <?php echo $_POST["Email"]; ?></p>

</body>
</html>