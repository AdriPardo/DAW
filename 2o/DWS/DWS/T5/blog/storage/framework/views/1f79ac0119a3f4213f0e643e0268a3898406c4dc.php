<html>
<head>
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet" type="text/css" />
    <title>
        <?php echo $__env->yieldContent('titulo'); ?>
    </title>
</head>

<body>
    <?php echo $__env->make('partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('contenido'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\DWS\T5\blog\resources\views/plantilla.blade.php ENDPATH**/ ?>