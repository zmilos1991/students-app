<html>
<head>
	<meta charset="UTF-8">
	<title>Create application for new student</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    
<body>
	<div class="wrapper centar">
	<h1>Insert new student application</h1>
    <a class="button" href="index.php">Search</a>
	<a class="button" href="select.php">All app</a>
	<a class="button" href="delete.php">Delete</a>
	
    <form  id="insertform" action="#" method="POST">
		<label>Name: <br>
		<input type="text" name="name">
		</label><br>
		<label>Email: <br>
		<input type="text" name="email">
		</label><br>
		<label>Age: <br>
		<input type="text" name="age">
		</label><br>
		<label>Phone number: <br>
		<input type="text" name="phonenumber">
		</label><br>
		<label>Preferred way of communication: <br>
		Email:
		<input type="radio" name="pwoc" value="email">
		Phone:
		<input type="radio" name="pwoc" value="phone">
		</label><br>
		<label>English level:<br>
		<input type="text" name="englishlevel">
		</label><br>
		<label>Available to start:<br>
		<input type="date" name="availabletostart">
		</label><br>
		<label>Technical skills:<br>
		<input type="text" name="technicalskills">
		</label><br>
		<label>Short personal presentation:<br>
		<input type="text" name="spp">
		</label><br>
		<label>Study from home:<br>
		<input type="checkbox" name="studyfromhome" value="Yes">
		</label><br>
		
		<br><input id="insertbutton" type="submit" name="insert" value="Insert new application"><br>
    </form>
        
   <div style="margin:3px;padding:5px;">
   <?php
    include "newstudent.php";
   ?>
   </div>
   
   </div>
</body>
    
</html>