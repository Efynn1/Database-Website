<!DOCTYPE html>
<html>
<head>
	<title>Post Status Form</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
	<h1>Post Status</h1>
	<form action="poststatusprocess.php" method="post">
		<label for="statuscode">Status Code:</label>
		<input type="text" id="statuscode" name="statuscode" minlength="5" maxlength="5" pattern="S[0-9]{4}" required>

		<label for="status">Status:</label>
		<input type="text" id="status" name="status" pattern="[a-zA-Z0-9 ,.!?]+" required><br>


		<fieldset>
			<legend>Share</legend>
			<label>
				<input type="radio" name="share" value="public">
				Public
			</label>
			<br>
			<label>
				<input type="radio" name="share" value="friends">
				Friends
			</label>
			<br>
			<label>
				<input type="radio" name="share" value="only_me">
				Only Me
			</label>
		</fieldset><br>
		

		<label for="date">Date:</label>
		<input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>

		<label for="permission[]">Permission:</label>
		<input type="checkbox" id="like" name="permissions" value="1">
		<label for="like">Allow Like</label>
		<input type="checkbox" id="comments" name="permissions" value="2">
		<label for="comments">Allow Comments</label>
		<input type="checkbox" id="share2" name="permissions" value="3">
		<label for="share2">Allow Share</label><br><br>

		<input type="submit" value="Submit">
	</form>
	<a href="index.html"><button>Back to Home</button></a>
	
	
<footer>
	<p>&copy; 2023 EthanFlynn. All rights reserved.</p>
</footer>
</body>
</html>
