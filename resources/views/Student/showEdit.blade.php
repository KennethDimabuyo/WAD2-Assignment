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
		<form method="POST" action="/index/view/{{ $students->id}}" enctype="multipart/form-data">
		{{ csrf_field() }}
			<div class="wrapper">
				<div class="form-group">
					<label class="sellLabel">First Name: </label>
					<div> <input class="form-control" type="text" name="fname" value="@if (!old('fname')){{$students->fname}}@endif{{old('fname')}}" required="required"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Last Name: </label>
					<div> <input class="form-control" type="text" name="lname" value="@if (!old('lname')){{$students->lname}}@endif{{old('lname')}}" required="required"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Age: </label>
					<div> <input class="form-control" type="number" name="age" value="@if (!old('age')){{$students->age}}@endif{{old('age')}}" required="required"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Course: </label>
					<div> <input class="form-control" type="text" name="course" value="@if (!old('course')){{$students->course}}@endif{{old('course')}}" required="required"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Student Number: </label>
					<div> <input class="form-control" type="text" name="studentNumber" value="@if (!old('studentNumber')){{$students->studentNumber}}@endif{{old('studentNumber')}}" required="required"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Address: </label>
					<div> <textarea class="form-control" name="address" value="@if (!old('address')){{$students->address}}@endif{{old('address')}}" required="required"></textarea> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Guardian: </label>
					<div> <input class="form-control" type="text" name="guardian" value="@if (!old('guardian')){{$students->guardian}}@endif{{old('guardian')}}" required="required"> </div>
				</div>

				<div class="form-group">
					<label class="sellLabel">Guardian Number: </label>
					<div> <input class="form-control" type="number" name="number" value="@if (!old('number')){{$students->number}}@endif{{old('number')}}" required="required"> </div>
				</div>

				<br>
				<div class="form-group"> <input type="submit" name="submit" value="submit" class="btn btn-primary form-control"> </div>
			</div>
		</form>
	</div>

</body>
</html>