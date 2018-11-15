<html>
<head>
	<meta charset="UTF-8">
	<title>Student application manager</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    
<body>
    <div class="wrapper centar">
	<h1>Search student application</h1>
    <form action="#" method="GET">
     <input type="text" name="criteria" placeholder="Name or email of student..">
     <input id="searchbutton" type="submit" value="Search"><br><br>
     
	 <a class="button" href="select.php">All app</a>
	 <a class="button" href="insert.php">Insert</a>
	 <a class="button" href="delete.php">Delete</a>
    </form>
    <?php
    include "inc/getResult.php";
    ?>
	</div>
</body>
    
</html>