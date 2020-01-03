<!DOCTYPE html>
<html>
 <title>ADD BOOK</title>
	  <meta charset="utf-8">

	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
	<div class="container">
		<div class="row">
			<h1 style="text-align: center">ADD BOOK</h1>
			<form  action="../../controllers/add_book.php" method="POST" role="form" >
				<table class="table table-hover" style="border: 1px solid gray" >
					<tbody>
						<tr>
							<td>Mã tác giả </td>
							<td>
								<input type="text" name="id_author" placeholder="Mã tác giả...">
							</td>
							<td>Tên sách </td>
							<td>
								<input type="text" name="name_book" placeholder="Tên sách...">
							</td>
							<td>Mã thể loại </td>
							<td>
								<input type="text" name="id_catagory" placeholder="Mã thể loại...">
							</td>	
						</tr>
						<tr>
							<td>Nhà xuất bản </td>
							<td>
								<input type="text" name="puslishing_company" placeholder="Nhà xuất bản...">
							</td>
							<td>Năm xuất bản </td>
							<td>
								<input type="text" name="puslishing_year" placeholder="Năm xuất bản...">
							</td>
							<td>Mã nhà cung cấp </td>
							<td>
								<input type="text" name="id_provider" placeholder="Mã nhà cung cấp...">
							</td>
					</tbody>
				</table>
				<button type="submit" class="btn btn-danger" style="margin-top: 10px">Thêm</button>
			</form>
			
		</div>
	</div>
</body>
</html>