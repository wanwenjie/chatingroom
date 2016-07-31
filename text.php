<?php

echo $_POST['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	<form action="text.php" method="post" role="form">
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="email" name="email">
		<input type="submit">
	</form>
</body>
</html>