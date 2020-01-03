<?php 
	$name = $_POST['name_book'];
	$catagory_id = $_POST['id_catagory'];
	$puslishing_company = $_POST['puslishing_company'];
	$puslishing_year = $_POST['puslishing_year'];
	$provider_id = $_POST['id_provider'];
	$author_id = $_POST['id_author'];

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

	$sql = "INSERT INTO book (NameBook,PuslishingYear,PuslishingCompany,IdCatagory,IdProvider,IdAuthor)
	VALUES ('$name', '$puslishing_year', '$puslishing_company','$catagory_id','$provider_id','$author_id')";

	if ($conn->query($sql) === TRUE) {
	  	header("location: http://localhost:81/CreatTest/views/books/");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>