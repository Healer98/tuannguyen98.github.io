<?php 
	$id = $_POST['id'];
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

	$sql = "UPDATE book SET NameBook='$name',PuslishingYear = '$puslishing_year',PuslishingCompany = '$puslishing_year',IdCatagory = '$catagory_id',IdProvider = '$provider_id',IdAuthor = '$author_id' WHERE IdBook = 29";

	if ($conn->query($sql) === TRUE) {
	  	header("location: http://localhost:81/CreatTest/views/books/");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>