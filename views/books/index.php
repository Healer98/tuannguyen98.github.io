<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>BOOK</title>
		  <meta charset="utf-8">
		  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		 <?php
			include '../../controllers/connect.php';
		?>
	</head>
<body>

	<div class="container">
		<div class="row">
			<h1 style="text-align: center">BOOKS</h1>
			<form action="" method="POST" role="form" style="margin-top: 50px;">
				<table class="table table-hover" style="border: 1px solid black; text-align: center;">
					<thead>
						<tr style="background-color: #CCFFFF">
							<th>Mã sách</th>
							<th>Tên sách</th>
							<th>Nhà xuất bản</th>
							<th>Năm xuất bản</th>
							<th>Thể loại</th>
							<th>Tác giả</th>
							<th>Nhà cung cấp</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php while ($listbook = $result->fetch_assoc())  {
							
							?>
						<tr>
								<td><?php echo $listbook['IdBook'] ?></td>
								<td><?php echo $listbook['NameBook'] ?></td>
								<td><?php echo $listbook['PuslishingCompany'] ?></td>
								<td><?php echo $listbook['PuslishingYear'] ?></td>
								
								<td><?php echo $catagory['NameCatagory'] ?></td>

								<td><?php echo $provider['NameProvider'] ?></td>

								<td><?php echo $author['NameAuthor'] ?></td>
							
							<td>
								<?php
									echo "<a href='add.php'>Thêm</a> | <a href='../../controllers/delete_book.php?id=".$listbook['IdBook']."'>Xóa</a> | <a href='update.php?id=".$listbook['IdBook']."'>Sửa</a>"
								?>
							</td>
						</tr>
						<?php
								}
							?>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</body>
</html>
<?php
	echo 'Current PHP version :' . phpversion();
?>