<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		.myBtn{
			margin-top: 10px;
		}
		form>div>label{
			margin-top: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading" >
			Nhập thông tin sản phẩm
			</div>
			<div class="panel-body">
				<form method="post" action="{{ route('product/add') }}">
					<div>
						<label>Tên sản phẩm</label>
						<input type="text" name="nameProduct" class="form-control">
					</div>
					<div>
						<label>Hình ảnh</label>
						<input type="text" name="imageLink" class="form-control">
					</div>
					<div>
						<label>Giá</label>
						<input type="number" name="price" class="form-control">
					</div>
					<div>
						<label>Giảm giá</label>
						<input type="number" name="priceReduce" class="form-control">
					</div>
					<div>
						<label>Mô tả</label>
						<input type="text" name="description" class="form-control">
					</div>
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<button type="submit" class="btn btn-success myBtn">Thêm</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>