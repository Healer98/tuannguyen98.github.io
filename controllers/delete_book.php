<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "books";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$id = $_GET['id'];
	// sql to delete a record
	$sql = "DELETE FROM book WHERE IdBook= '$id'";

	if ($conn->query($sql) === TRUE) {
	    header("location: http://localhost:81/CreatTest/views/books/");
	} else {
	    echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
?>