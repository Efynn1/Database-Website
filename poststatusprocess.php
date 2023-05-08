<?php
	//Database connection
	include_once 'conf/sqlinfo.inc.php';
	
	//Input variables
	$statuscode = $_POST["statuscode"];
	$status = $_POST["status"];
	$share = $_POST["share"];
	$date = $_POST["date"];
	$permissions = $_POST["permissions"];
	
	//Check for table in database
	$exists =mysql_query("select 1 from PostStatus");
	
	//Table exists
	if ($exists !== FALSE) {
		//Insert input variables into table
		$sql = "INSERT INTO StatusPosts (statuscode, status, share, date, permissions)
		VALUES ('$statuscode', '$status', '$share', '$date', '$permissions');";
		mysqli_query($conn, $sql);
	}
	//Table doesn't exist
	else {
		// Create new table
		$sql = "CREATE TABLE StatusPosts (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		statuscode VARCHAR(10) NOT NULL,
		status VARCHAR(255) NOT NULL,
		share VARCHAR(50) NOT NULL,
		date DATE NOT NULL,
		permissions INT(1) NOT NULL
		)";
		
		if (mysqli_query($conn, $sql)) {
			echo "Table StatusPosts created successfully";
			}
		//Insert input variables into table
		$sql = "INSERT INTO StatusPosts (statuscode, status, share, date, permissions)
		VALUES ('$statuscode', '$status', '$share', '$date', '$permissions');";
		mysqli_query($conn, $sql);
		}

	
?>
<html>
<head>
	<title>Post Status Form</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
	<h1>Status Posted!</h1>
	
	<br>
	<a href="index.html"><button>Back to Home</button></a>


<footer>
	<p>&copy; 2023 EthanFlynn. All rights reserved.</p>
</footer>
</body>
</html>
