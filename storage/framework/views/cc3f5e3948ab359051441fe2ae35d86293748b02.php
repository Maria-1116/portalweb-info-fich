<?php $__env->startSection('content'); ?>

<div class="row" style="padding-top: 3em;">
    <div class="col s12 m6">
        <span style="font-weight: bold; font-size: 22pt;">Codigo carrera/Plan   : </span>
        <span style="font-weight: bold; font-size: 22pt;"><?php echo e($dato_carrera->codigo); ?></span>
        <br>
        <br>

        <span style="font-weight: bold; font-size: 22pt;">Nombres: </span>
        <span style="font-weight: bold; font-size: 22pt;"><?php echo e($dato_carrera->nombre); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Objetivo: </span>
        <p><?php echo e($dato_carrera->objetivo); ?></p>
        <br>
        <br>

        <span style="font-weight: bold">Mision: </span>
        <span><?php echo e($dato_carrera->mision); ?></span>
        <br>
        <br>

        <span style="font-weight: bold">Vision: </span>
        <p><?php echo e($dato_carrera->vision); ?></p>
        <br>
        <br>

        <span style="font-weight: bold">Perfil Profesional: </span>
        <p><?php echo e($dato_carrera->perfil_profesional); ?></p>
        <br>
        <br>

        <span style="font-weight: bold">Campo Laboral: </span>
        <p><?php echo e($dato_carrera->campo_laboral); ?></p>
        <br>
        <br>
    </div>
    <div class="col s12 m6">
        <span style="font-weight: bold">Programas Analiticos: </span>
        <a href="<?php echo e($dato_carrera->programas_analiticos); ?>" target="_blank"><?php echo e($dato_carrera->programas_analiticos); ?></a>
        <br>
        <br>

        <span style="font-weight: bold">Carga Horaria: </span>
        <a href="<?php echo e($dato_carrera->horario_actual); ?>" target="_blank"><?php echo e($dato_carrera->horario_actual); ?></a>
        <br>
        <br>

        <span style="font-weight: bold">Malla Curricular: </span>
        <a href="<?php echo e($dato_carrera->malla_curricular); ?>" target="_blank"><?php echo e($dato_carrera->malla_curricular); ?></a>
        <br>
        <br>

        <span style="font-weight: bold">Plantel Academico: </span>
        <ol>
            <?php $__currentLoopData = $datos=explode(",", $dato_carrera->plantel_academico); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
        <br>
        <br>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/dato_carrera/show.blade.php ENDPATH**/ ?>