<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTAL WEB INFORMATICA FICH</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<?php if(Route::current()->getName() == 'home'): ?>

<body
    style="background-image: url('<?php echo e(asset('imgs/fondo.png')); ?>'); 
            background-repeat: no-repeat;
            /* background-attachment: fixed; */
            background-position: center center;
            background-size: cover;">
<?php else: ?>
<body>
<?php endif; ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main class="primary-background" style="height: auto;">
    <div class="container"></div>
    <div class="row">
        <div class="col s12 m12 l12 l12 xl10 offset-xl1">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</main>



<footer class="page-footer" style="margin-top: 3em; background-color: rgb(117, 12, 35)">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Universidad Autonoma Gabriel Rene Moreno - Facultad Integral del Chaco</h5>
                <p class="grey-text text-lighten-4">Cantidad de visitas: <?php echo e(session('contador-visitas')); ?>.
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="background-color: rgb(19, 8, 99)">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, {});
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, {});
    });
</script>
</body>

</html>
<?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/layouts/app.blade.php ENDPATH**/ ?>