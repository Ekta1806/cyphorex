<!DOCTYPE html>
<html>
<head>
    <title>Cyphorex Solution</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
    
<div class="container">
    <h4>List Of Main Vehicles</h4>
   
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th> ID</th>
                <th>CAR NAME</th>
                <th>Book</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
             <td><?php echo e($car->id); ?> </td>
            <td><?php echo e($car->car_name); ?></td>
            <td><a href=<?php echo e("bookingForm/" . $car['id']); ?>>Book</a></td>
            </tr>
            
        </tbody>
    </table>
</div>
   
</body>
   
<!-- <script type="text/javascript">
 $(document).ready(function() {
     var $id = $("#id").val();
     console.log($id);
    $('.data-table').dataTable( {
        "processing": true,
        "serverSide": true,

        "ajax": {
        "url": "<?php echo e(url('vehical_cat')); ?>",
        "type": "GET",
        "data": {
            'id': $id,
        }
    },
        "columns": [
           {data: 'id', name: 'id'},
            {data: 'car_name', name: 'car_name'},
        ]
    } );
});
</script> -->
</html>
<?php /**PATH C:\xampp\htdocs\cyphorex\vehicals\resources\views/cars.blade.php ENDPATH**/ ?>