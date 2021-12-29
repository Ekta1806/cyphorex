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
	<form action='/admin/addsubcategorySubmit' method="POST">
		<?php echo csrf_field(); ?>
		<?php if(session('status')): ?>
			<div style="color:green; padding-bottom:30px"><?php echo e(session('status')); ?></div>
			<?php endif; ?>
			<?php if(session('fail')): ?>
			<div style="color:red; padding-bottom:30px"><?php echo e(session('fail')); ?></div>
		<?php endif; ?>
	   <div class="container mt-5" style="max-width: 450px">
	        <h4 class="mb-4">Enter Sub Category Here</h4><br><br>
	        <div class="form-group">
		        <label>Vehicle:</label><br>
		        <input type="text" name="vehicle_id"><br>
		    </div>
		    <span style="color: red"><?php $__errorArgs = ['vehicle_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
	        <div class="form-group">
		        <label>Car Name:</label><br>
		        <input type="text" name="car_name"><br>
		    </div>
		    <span style="color: red"><?php $__errorArgs = ['car_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br><br>
		    <input type="submit" value="submit">
	    </div>
	</form>
	
</body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</html><?php /**PATH C:\xampp\htdocs\cyphorex\vehicals\resources\views/addsubcategory.blade.php ENDPATH**/ ?>