<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

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
	<form action='<?php echo e("bookingFormSubmit/" . $car["id"]); ?>' method="POST">
		<?php echo csrf_field(); ?>
		<?php if(session('status')): ?>
			<div style="color:green; padding-bottom:30px"><?php echo e(session('status')); ?></div>
			<?php endif; ?>
			<?php if(session('fail')): ?>
			<div style="color:red; padding-bottom:30px"><?php echo e(session('fail')); ?></div>
		<?php endif; ?>
		<input type="hidden" id="id" name="id" value="<?php echo e($car->id); ?>">
	   <div class="container mt-5" style="max-width: 450px">
	        <h2 class="mb-4">Please Select Below Details</h2><br><br>
	         <div class="form-group">
		        <label>Name:</label><br>
		        <input type="text" name="name"><br>
		        <span style="color: red"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
		    </div>
	        <div class="form-group">
	        	<label>Book Date And Time:</label>
	            <div class='input-group date' id='datetimepicker'>
	            <input type='text' class="form-control" name="book_date"/>
	            <span class="input-group-addon">
	              <span class="glyphicon glyphicon-calendar"></span>
	            </span>
	            </div>
	            <span style="color: red"><?php $__errorArgs = ['book_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
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
				  <span style="color: red"><?php $__errorArgs = ['booking_for'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
	            </div>
	        </div>
	        <input type="submit" value="submit">
	   </div>
	   <br><br>
	   	<?php if(Session::has('success')): ?>
		    <div class="alert alert-success">
		        <ul>
		            <li><?php echo e(\Session::get('success')); ?></li>
		        </ul>
		    </div>
		<?php endif; ?>

		<?php if(Session::has('error')): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <li><?php echo e(\Session::get('error')); ?></li>
		        </ul>
		    </div>
		<?php endif; ?>
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
</html><?php /**PATH C:\xampp\htdocs\cyphorex\vehicals\resources\views/bookingForm.blade.php ENDPATH**/ ?>