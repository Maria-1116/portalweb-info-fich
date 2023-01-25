<?php $__env->startSection('content'); ?>

        
        
    <?php $__currentLoopData = $tipos_titulacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo_titulacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span><strong><?php echo e($tipo_titulacion->modalidad_titulacion); ?></strong></span>
        <ol>
            <?php $__currentLoopData = $datos = explode(',', $tipo_titulacion->descripcion); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>


        <?php if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO')): ?>
        <div class="left">
            <a href="<?php echo e(route('tipo_titulacion.edit', [$tipo_titulacion->id])); ?>"><span class="new badge amber accent-4"
                data-badge-caption="editar"></span></a>
            <a href="<?php echo e(route('tipo_titulacion.destroy', [$tipo_titulacion->id])); ?>"><span class="new badge red"
                    data-badge-caption="eliminar"></span></a>
        </div>
        <?php endif; ?>

        <br>
        <br>
        <div class="divider"></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/tipo_titulacion/index.blade.php ENDPATH**/ ?>