<?php
	//Database connection
	include_once 'conf/sqlinfo.inc.php';
	
	// Take input to search for matches in database
	$search = $_POST["search"];
	
	if(mysqli_connect_errno()){
		echo mysqli_connect_error();
		exit();
	}else{
		//Select data from database and ordering by Status Code
		$selectQuery = "SELECT * FROM StatusPosts ORDER BY statuscode ASC";
		$result = mysqli_query($conn,$selectQuery);
		if(mysqli_num_rows($result) > 0){
		}else{
			// Data recovery failed becuase no table or no data in table directs user to input data
			?>
			<a href="http://frq8071.cmslamp14.aut.ac.nz/assign1/poststatusform.php"><button>Create new data</button></a>
			<?php
			$msg = "No records found please return and input records";
		}
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>HTML and PHP code</title>
</head>
<body>
    <h1>Display user list using HTML and PHP</h1>
    <?=$msg;?>
    <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th>Status Code</th>
                <th>Status</th>
                <th>Access</th>
                <th>Date</th>
                <th>Permissions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row['status_code']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['share']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['Permissions']; ?></td>
                <tr>
            <?}?>
        </tbody>
    </table>

	<br>
	<a href="index.html"><button>Back to Home</button></a>
	<a href="http://frq8071.cmslamp14.aut.ac.nz/assign1/poststatusform.php"><button disabled>Create new data</button></a>


<footer>
	<p>&copy; 2023 EthanFlynn. All rights reserved.</p>
</footer>
</body>
</html>
