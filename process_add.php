<?php
    session_start();
	if(isset($_SESSION['username'])) $username = $_SESSION['username'];
    if(isset($_POST['title'])) $title = $_POST['title'];
	if(isset($_POST['category'])) $category = $_POST['category'];
	if(isset($_POST['description'])) $description = $_POST['description'];
	if(isset($_POST['tags'])) $tags = $_POST['tags'];
	
	
	$filename = $_FILES['image']['name'];   
	$location = $_FILES['image']['tmp_name'];
	
	//move the file
	move_uploaded_file($location, "uploads/$filename");
	
	//put data into database
		$db = mysqli_connect("localhost", "root","", "artworks")  or die(mysqli_error($db));
		$q = "insert into artwork values(null, '$username','$title', '$category', '$description', '$tags', '$filename')";
		mysqli_query($db, $q) or die(mysqli_error($db));
		
	//redirect
	header("Location:gallery.php");
	exit(0);
?>
