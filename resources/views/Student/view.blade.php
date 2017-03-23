<!DOCTYPE html>
<html>
<head>
	<title>Students ID</title>
	<link rel="stylesheet" type="text/css" href=" {{ asset('/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('/css/design1.css') }} ">

</head>
<body>

	<div class="container">

		<div class="head">
			<h1>Students Form</h1>
			<br>
		</div>
		
		<div>
			<table class="table">
				<tr>
					<th>Full Name</th>
					<th>Age</th>
					<th>Course</th>
					<th>Student Number</th>
					<th>Address</th>
					<th>Guardian</th>
					<th>Guardian Number</th>
					<th></th>
					<th></th>
				</tr>


				@foreach ($students as $student)
				<tr>
					<td>{{ $student->fname . ' '. $student->lname }}</td>
					<td>{{ $student->age }}</td>
					<td>{{ $student->course }}</td>
					<td>{{ $student->studentNumber }}</td>
					<td>{{ $student->address }}</td>
					<td>{{ $student->guardian }}</td>
					<td>{{ $student->number }}</td>
					<td>
						<a href="/index/{{ $student->id }}/delete">
							<button class="btn btn-danger">delete</button>
						</a>
					</td>

					<td>
						<a href="/index/{{ $student->id }}/edit">
							<button class="btn btn-primary">edit</button>
						</a>
					</td>
				</tr>
				@endforeach

			</table>
		</div>

	</div>

</body>
</html>