<!DOCTYPE html>
<html>
<head>
	<title>Students ID</title>
	<link rel="stylesheet" type="text/css" href=" {{ asset('/css/bootstrap.min.css') }} ">
	<link rel="stylesheet" type="text/css" href=" {{ asset('/css/design1.css') }} ">

</head>
<body>

	<div class="form-file">

		<div class="head">
			<h1>Students Form</h1>
			<br>
		</div>
		<form method="POST" action="{{ url('index/view') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
			<div class="wrapper">
				<div class="form-group">
					<label class="sellLabel">First Name: </label>
					<div> <input class="form-control" type="text" name="fname"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Last Name: </label>
					<div> <input class="form-control" type="text" name="lname"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Age: </label>
					<div> <input class="form-control" type="number" name="age"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Course: </label>
					<div> <input class="form-control" type="text" name="course"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Student Number: </label>
					<div> <input class="form-control" type="text" name="studentNumber"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Address: </label>
					<div> <textarea class="form-control" name="address" ></textarea> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Guardian: </label>
					<div> <input class="form-control" type="text" name="guardian"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Guardian Number: </label>
					<div> <input class="form-control" type="number" name="number"> </div>
				</div>

				<br>
				<div class="form-group"> <input type="submit" name="submit" value="submit" class="btn btn-primary form-control"> </div>
			</div>
		</form>
	</div>

</body>
</html>