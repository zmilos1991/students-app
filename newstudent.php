<?php
if(isset($_POST['insert'])){
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['phonenumber']) && isset($_POST['pwoc'])
		&& isset($_POST['englishlevel']) && isset($_POST['technicalskills']) && isset($_POST['spp'])
		){
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['phonenumber'])
		&& !empty($_POST['pwoc']) && !empty($_POST['englishlevel'])
		&& !empty($_POST['technicalskills']) && !empty($_POST['spp'])){
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$age = $_POST['age'];
			$phonenumber = $_POST['phonenumber'];
			$pwoc = $_POST['pwoc'];
			$englishlevel = $_POST['englishlevel'];
			$technicalskills = trim($_POST['technicalskills']);
			$spp = $_POST['spp'];
			$studyfromhome = $_POST['studyfromhome'];
			
			require 'inc/connect.php';
			
			$query = "INSERT INTO students(name, email, age, phone_number, pwoc, englevel, technicalskills, shortpersonalpresentation, studyfromhome) 
			VALUES ('{$name}','{$email}','{$age}','{$phonenumber}','{$pwoc}','{$englishlevel}','{$technicalskills}','{$spp}','{$studyfromhome}')";
			
			if(mysqli_query($conn,$query) === TRUE){
				echo "New application has been inserted in database.";
			}else {
				echo "Insert failed.";
			}
		}else { 
			echo "Fields cannot be empty!";
				}
	}else {
			echo "You have to fill every textbox.";
			}
}


?>