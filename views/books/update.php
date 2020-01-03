<!DOCTYPE html>
<html>
 <title>UPDATE BOOK</title>
	  <meta charset="utf-8">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

			$id = $_GET['id'];
			// sql to update a record
			$sql = "SELECT * FROM book WHERE IdBook= '$id'";
			$result =  $conn->query($sql);

			 $update = mysqli_fetch_array($result);
			$conn->close();

		?>
<body>
	<div class="container">
		<div class="row">
			<h1 style="text-align: center">UPDATE BOOK</h1>
			<form  action="../../controllers/update_book.php" method="POST" role="form" >
				<table class="table table-hover" style="border: 1px solid gray" >
					<tbody>
						<tr>
							<td>Mã tác giả </td>
							<td>
								<input type="text" name="id_author" value="<?php echo $update['IdAuthor'] ?>" placeholder="Mã tác giả...">
							</td>
							<td>Tên sách </td>
							<td>
								<input type="text" name="name_book" value="<?php echo $update['NameBook'] ?>" placeholder="Tên sách...">
							</td>
							<td>Mã thể loại </td>
							<td>
								<input type="text" name="id_catagory" value="<?php echo $update['IdCatagory'] ?>" placeholder="Mã thể loại...">
							</td>	
						</tr>
						<tr>
							<td>Nhà xuất bản </td>
							<td>
								<input type="text" name="puslishing_company" value="<?php echo $update['PuslishingCompany'] ?>" placeholder="Nhà xuất bản...">
							</td>
							<td>Năm xuất bản </td>
							<td>
								<input type="text" name="puslishing_year" value="<?php echo $update['PuslishingYear'] ?>" placeholder="Năm xuất bản...">
							</td>
							<td>Mã nhà cung cấp </td>
							<td>
								<input type="text" name="id_provider" value="<?php echo $update['IdProvider'] ?>" placeholder="Mã nhà cung cấp...">
							</td>
					</tbody>
				</table>
				<button type="submit" class="btn btn-danger" style="margin-top: 10px">Sửa</button>
			</form>
			
		</div>
	</div>
</body>
</html>