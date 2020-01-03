<?php
	$servername = "localhost";
	$username = "username";
	$password = "";
	$dbname = "books";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql_book ="SELECT * FROM book";
	$result = $conn->query($sql_book);

	$sql_catagory ="SELECT * FROM category";
	$result1 = $conn->query($sql_catagory);
	$catagory = mysqli_fetch_assoc($result1);

	$sql_provider ="SELECT * FROM provider";
	$result2 = $conn->query($sql_provider);
	$provider = mysqli_fetch_assoc($result2);

	$sql_author ="SELECT * FROM author";
	$result3 = $conn->query($sql_author);
	$author = mysqli_fetch_assoc($result3);

	$conn->close();

?>