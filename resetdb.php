<html>
<head>
	<title>Drop Table</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
	<h1>Drop Table</h1>
		
	<?php
		//Database connection
		include_once 'conf/sqlinfo.inc.php';
		
	// Drop table command
	$sql = "DROP TABLE IF EXISTS StatusPosts";
	if (mysqli_query($conn, $sql)) {
		echo "Database table dropped successfully";
	} else {
		echo "Error dropping database table: " . mysqli_error($conn);
	}

	// Close database connection
	mysqli_close($conn);
	?>
	<br>
	<a href="index.html"><button>Back to Home</button></a>
	
	
	<footer>
		<p>&copy; 2023 EthanFlynn. All rights reserved.</p>
	</footer>
</body>
</html>
