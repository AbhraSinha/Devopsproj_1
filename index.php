<!DOCTYPE html>
<html>
<head>
		<title>Title Update : 4/2/2018</title>
</head>
<body>
	<?php
		require 'Welcome.php';
		$welcome = new Welcome();
	?>
	<h1><?php echo $welcome->greet() ?></h1>
	<h2>This Pipeline work!</h2>
	<h3>Update Version 1.0</h3>
</body>
</html>
