<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:grey">
	<form action='/admin/addsubcategorySubmit' method="POST">
		@csrf
		@if(session('status'))
			<div style="color:green; padding-bottom:30px">{{session('status')}}</div>
			@endif
			@if(session('fail'))
			<div style="color:red; padding-bottom:30px">{{session('fail')}}</div>
		@endif
	   <div class="container mt-5" style="max-width: 450px">
	        <h4 class="mb-4">Enter Sub Category Here</h4><br><br>
	        <div class="form-group">
		        <label>Vehicle:</label><br>
		        <input type="text" name="vehicle_id"><br>
		    </div>
		    <span style="color: red">@error('vehicle_id'){{ $message }}@enderror</span>
	        <div class="form-group">
		        <label>Car Name:</label><br>
		        <input type="text" name="car_name"><br>
		    </div>
		    <span style="color: red">@error('car_name'){{ $message }}@enderror</span><br><br>
		    <input type="submit" value="submit">
	    </div>
	</form>
	
</body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</html>