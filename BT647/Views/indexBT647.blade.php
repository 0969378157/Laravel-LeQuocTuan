<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
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

		th{
			width: 100px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Sản phẩm
			</div>

			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<th style="width: 40px">Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Giá bán</th>
						<th>Giảm giá</th>
						<th>Mô tả</th>
						<th style="width: 60px"></th>
					</tr>
					@foreach ($product as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->name_product }}</td>
						<td>{{ $item->price }}</td>
						<td>{{ $item->reduce_price }}</td>
						<td>{{ $item->description }}</td>
					</tr>
					@endforeach
				</table>
				<nav aria-label="Page navigation example">
				  	<ul class="pagination">
					    {{ $product->links() }}
				  	</ul>
				</nav>
			</div>
		</div>		
	</div>
</body>
</html>