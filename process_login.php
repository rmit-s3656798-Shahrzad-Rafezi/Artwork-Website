<?php
session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	//connect to the db server
	$db = mysqli_connect('localhost', 'root', '', 'artworks') or die(mysqli_error($db));

	//define the query
	$q = "select * from member where username = '$username' and password = SHA('$password')";

	//run an insert query
	$results = mysqli_query($db, $q) or die(mysqli_error($db));

    if(mysqli_num_rows($results) > 0) {

        $_SESSION['username'] = $username;
        header("Location:add.php");
    }
    else {
        print"<h3>You are not registered</h3>";
    }

?>
