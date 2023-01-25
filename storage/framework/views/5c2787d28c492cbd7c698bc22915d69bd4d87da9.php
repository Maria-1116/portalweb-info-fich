<?php $__env->startSection('content'); ?>
<div class="container">
    <span style="font-weight: bold">CI: </span>
        <span><?php echo e($dato_carrera->codigo); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Nombres: </span>
        <span><?php echo e($dato_carrera->nombre); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Celular: </span>
        <span><?php echo e($dato_carrera->objetivo); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Direccion: </span>
        <span><?php echo e($dato_carrera->mision); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Fecha de Nacimiento: </span>
        <span><?php echo e($dato_carrera->vision); ?></span>
        <br>
        <br>
        
        <span style="font-weight: bold">CI: </span>
        <span><?php echo e($dato_carrera->perfil_profesional); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Nombres: </span>
        <span><?php echo e($dato_carrera->campo_laboral); ?></span>
        <br>
        <br>


        <span style="font-weight: bold">Celular: </span>
        <span><?php echo e($dato_carrera->programas_analiticos); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Direccion: </span>
        <span><?php echo e($dato_carrera->horario_actual); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Fecha de Nacimiento: </span>
        <a href="<?php echo e($dato_carrera->malla_curricular); ?>" target="_blank"><?php echo e($dato_carrera->malla_curricular); ?></a>
        <br>
        <br>

        <span style="font-weight: bold">Direccion: </span>
        <span><?php echo e($dato_carrera->plantel_academico); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Fecha de Nacimiento: </span>
        <span><?php echo e($dato_carrera->id_persona); ?></span>
        <br>
        <br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/informacion.blade.php ENDPATH**/ ?>