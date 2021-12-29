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
	<form action='{{"bookingFormSubmit/" . $car["id"]}}' method="POST">
		@csrf
		@if(session('status'))
			<div style="color:green; padding-bottom:30px">{{session('status')}}</div>
			@endif
			@if(session('fail'))
			<div style="color:red; padding-bottom:30px">{{session('fail')}}</div>
		@endif
		<input type="hidden" id="id" name="id" value="{{$car->id}}">
	   <div class="container mt-5" style="max-width: 450px">
	        <h2 class="mb-4">Please Select Below Details</h2><br><br>
	         <div class="form-group">
		        <label>Name:</label><br>
		        <input type="text" name="name"><br>
		        <span style="color: red">@error('name'){{ $message }}@enderror</span>
		    </div>
	        <div class="form-group">
	        	<label>Book Date And Time:</label>
	            <div class='input-group date' id='datetimepicker'>
	            <input type='text' class="form-control" name="book_date"/>
	            <span class="input-group-addon">
	              <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	            </div>
	            <span style="color: red">@error('book_date'){{ $message }}@enderror</span>
	        </div>
	         <div class="form-group">
	         	<label>Book For Hrs/Day:</label>
	            <div class="form-select" aria-label="Default select example" id='booking_for'>
	           		<select name="booking_for" id="booking_for">
	           			<option value="">Select Any Option</option>
					    <optgroup label="Hourly">
					      <option value="1Hr">1Hr</option>
					      <option value="3Hr">3Hr</option>
					    </optgroup>
					    <optgroup label="Half Day">
					      <option value="Morning Session">Morning Session</option>
					      <option value="Evening Session">Evening Session</option>
					    </optgroup>
					    <optgroup label="Full Day">
					    	<option value="Full Day">Full Day</option>
					    </optgroup>
				  </select><br>
				  <span style="color: red">@error('booking_for'){{ $message }}@enderror</span>
	            </div>
	        </div>
	        <input type="submit" value="submit">
	   </div>
	   <br><br>
	   	@if (Session::has('success'))
		    <div class="alert alert-success">
		        <ul>
		            <li>{{ \Session::get('success') }}</li>
		        </ul>
		    </div>
		@endif

		@if (Session::has('error'))
		    <div class="alert alert-danger">
		        <ul>
		            <li>{{ \Session::get('error') }}</li>
		        </ul>
		    </div>
		@endif
	</form>
	
</body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        $(function() {
           $('#datetimepicker').datetimepicker();
        });
    </script>    
</html>