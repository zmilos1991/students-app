<html>
<head>
	<meta charset="UTF-8">
	<title>Applications for every student</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    
<body>
	<div class="wrapper centar">
	<h1>All aplications</h1>
    <a class="button" href="index.php">Search</a>
	<a class="button" href="insert.php">Insert</a>
	<a class="button" href="delete.php">Delete</a>
	<br>
    
   <div style="margin:3px;padding:5px;">
   <?php
		require 'inc/connect.php';
		
		$query = "SELECT * FROM students";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0 ){
			while($row = mysqli_fetch_assoc($result)){
			?>
			<div class="result">
				<p>Name: <?php echo $row['name']; ?></p>
				<p>Email: <?php echo $row['email']; ?></p>
				<p>Age: <?php echo $row['age']; ?></p>
				<p>Phone number: <?php echo $row['phone_number']; ?></p>
				<p>Prefered way of comunication: <?php echo $row['pwoc']; ?></p>
				<p>English level: <?php echo $row['englevel']; ?></p>
				<p>Technical skills: <?php echo $row['technicalskills']; ?></p>
				<p>Short personal presentation: <?php echo $row['shortpersonalpresentation']; ?></p>
				<p>Study from home: <?php echo $row['studyfromhome']; ?></p>
			</div>
			<?php
			}
		}else {
			echo "There are no students in database.";
		}
		
   ?>
   </div>
</body>
    
</html>