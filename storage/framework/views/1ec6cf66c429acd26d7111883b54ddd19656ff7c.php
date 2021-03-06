<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Welcome to Easy Learning</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
   integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('test/css/bootstrap.min.css')); ?>">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href= "<?php echo e(asset('test/css/mdb.min.css')); ?>">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?php echo e(asset('test/css/style.css')); ?>">
</head>
<body>
     <!-- Start your project here-->  
    
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo e(asset('test/js/jquery.min.js')); ?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo e(asset('test/js/popper.min.js')); ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo e(asset('test/js/bootstrap.min.js')); ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo e(asset('test/js/mdb.min.js')); ?>"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\lcrud\lblog\resources\views/layouts/main.blade.php ENDPATH**/ ?>