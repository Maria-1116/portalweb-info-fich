<nav class="navbar nav-extended no-padding dark-primary-color" style="background-color: rgb(19, 8, 99)">


    <?php if(auth()->guard()->check()): ?>
        <a href="#" data-target="slide-out" class="sidenav-trigger left show-on-medium-and-up"><i
                class="material-icons">menu</i></a>
    <?php endif; ?>
    <div class="nav-wrapper">
        <a href="<?php echo e(route('raiz')); ?>" class="brand-logo hide-on-small-only">INGENIERIA INFORMATICA FICH</a>
        <?php if(auth()->guard()->check()): ?>
            <ul id="nav-mobile" class="right">
                <li><a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="waves-effect dark-primary-color-text" type="submit"><i
                            class="material-icons right">exit_to_app</i>Cerrar sesión</a></li>
                <form style="height: 0;" id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                </form>
            </ul>

            <?php echo $__env->yieldContent('breadcrumb'); ?>
        <?php endif; ?>

        <?php if(auth()->guard()->check()): ?>
        <ul id="nav-mobile" class="right">
            <li><a id="fuenteBtn" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">border_color</i></a></li>
            <li><a id="darkModeBtn" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">brightness_6</i></a></li>
            <li><a href="<?php echo e(route('buscador')); ?>"><i class="material-icons">search</i></a></li>
            <li>
            <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            </li>
        </ul>
        <?php else: ?>
        <ul id="nav-mobile" class="right">
            <li><a id="darkModeBtn" class="dropdown-trigger" href="#!" data-target="tema"><i class="material-icons right">brightness_6</i></a></li>
            <li>
            <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline"style="background-color:rgb(146, 43, 33 ); border-color:blue; color:white">Login</a>

            
                    </li>
                </ul>
        <?php endif; ?>
    </div>
</nav>


<style>
    .fondo {
        background-color: rgb(11, 5, 61);
        padding: 1px 5px;
    }
</style>
<?php if(auth()->guard()->check()): ?>
    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img
                        src="https://images.pexels.com/photos/768474/pexels-photo-768474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="responsive-img">
                </div>
                <a href="#user"><img class="circle"
                        src="https://scontent.fvvi1-1.fna.fbcdn.net/v/t1.6435-9/31275713_923889421104893_2175724638519164928_n.jpg?stp=dst-jpg_p960x960&_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_ohc=pmp29LRz914AX-j0o0P&_nc_ht=scontent.fvvi1-1.fna&oh=00_AfCdRbmmtdFwNdj2UtqF9VefsYrOKfm8NUuM3J5lS7tLCg&oe=63DAFA5B"></a>
                
                <a href="#name" class="fondo"><span class="white-text name fondo center"><?php echo e(auth()->user()->name); ?></span></a>
                <a href="#email"><span class="white-text email fondo center"><?php echo e(auth()->user()->email); ?></span></a>
            </div>
        </li>
        <li><a class="waves-effect" href="<?php echo e(route('home')); ?>"><i class="material-icons">home</i>Inicio</a></li>

        <?php $__currentLoopData = auth()->user()->roles->modulo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a class="waves-effect" href="<?php echo e(route($modulo->ruta . '.index')); ?>"><i
                        class="material-icons">bookmark_border</i>Gestionar <?php echo e($modulo->nombre); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/layouts/header.blade.php ENDPATH**/ ?>