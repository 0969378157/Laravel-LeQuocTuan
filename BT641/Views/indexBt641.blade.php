<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiển thị sinh viên</title>
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
	<script type="text/javascript">
		function deleteStudent(id){
			$.post("{{ route('delete-student') }}",
			{
				'_token' : $('[name=_token]').val(),
				id: id
			},
			function(data, status){
				alert("Data: " + data + "\nStatus: "+ status);
				location.reload();
			});
		}
	</script>
</head>
<body>
	{{csrf_field()}}
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Management Students's Detail Information
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<th style="width: 40px">No</th>
						<th>FullName</th>
						<th>Age</th>
						<th>Address</th>
						<th style="width: 60px"></th>
						<th style="width: 60px"></th>
					</tr>
						@foreach ($student as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->fullname }}</td>
						<td>{{ $item->age }}</td>
						<td>{{ $item->address }}</td>
						<td><a href="{{ route('edit-student') }}?id={{ $item->id }}"><button class="btn btn-warning">Edit</button></a></td>
						<td><button onclick="deleteStudent({{ $item->id }})" class="btn btn-danger">Delete</button></td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading" >
			Input infomation students
			</div>
			<div class="panel-body">
				<form method="post" action="{{ route('add-student') }}">
					{{csrf_field()}}
					<input style="display: none;" type="text" name="id"  class="form-control" value="{{ $edit? $id : '' }}">
					<div>
						<label>FullName</label>
						<input type="text" name="fullname"  class="form-control" value="{{$edit? $fullname : '' }}">
					</div>
					<div>
						<label>Age</label>
						<input type="number" name="age" value="{{ $edit? $age : ''}}" class="form-control" style="width:100px; ">
					</div>
					<div >
						<label>Address</label>
						<input type="text" name="address" value="{{ $edit? $address : ''}}" class="form-control">
					</div>
					<input type="submit" value="{{ $edit? 'Update' : 'Add'}}" class="btn btn-success myBtn"></input>
				</form>
			</div>
		</div>
	</div>
</body>
</html>