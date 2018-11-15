<?php
require 'connect.php';

if(isset($_GET['criteria'])){
	if(!empty($_GET['criteria'])){
		$criteria = trim($_GET['criteria']);
		$criteria = mysqli_real_escape_string($conn, $criteria);
		$query = "SELECT * FROM students WHERE name LIKE '%{$criteria}%' OR email LIKE '%{$criteria}%'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0){
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
		}else{
			echo "No result!";
		}
	}else{
		echo "Text field is empty.";
	}
}

?>