<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		include "myfunction.php";
	?>
	<form method="POST" action="<?php echo domain();?>dashboard.php">
		Username: <input type="text" name="username" required><br /><br />
		Passwrod: <input type="password" name="password" required><br /><br />
		<input type="submit" value="Login">
	</form>
</body>
</html>