<?php
	if(isset($_POST['username']))
        $username = $_POST['username'];
	if(isset($_POST['password']))
        $password = $_POST['password'];

	//connect to the db server
	$db = mysqli_connect('localhost', 'root', '', 'artworks') or die(mysqli_error($db));
	
	//define the query
	$q = "insert into member values(null, '$username', SHA('$password'), now())";
	
	//run an insert query
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	
	//redirect to home page
    header("Location:homepage.php");
    exit(0);
?>
