<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách phòng</title>
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
			<div class="panel-heading">
				Danh sách phòng
			</div>

			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<th style="width: 40px">STT</th>
						<th>Mã phòng</th>
						<th>Loại phòng</th>
						<th>Tầng</th>
						<th>Giá tiền</th>
						<th>Tên khách sạn</th>
						<th>Địa chỉ</th>
						<th style="width: 60px"></th>
					</tr>
					@php
						$count = 1;
					@endphp
					@foreach ($roomList as $item)
					<tr>
						<td>{{ $count++ }}</td>
						<td>{{ $item->id_room }}</td>
						<td>{{ $item->type_room }}</td>
						<td>{{ $item->floor }}</td>
						<td>{{ $item->price }}</td>
						<td>{{ $item->name_hotel }}</td>
						<td>{{ $item->address_Hotel }}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</body>
</html>