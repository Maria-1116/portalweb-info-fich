<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="<?php echo e(route('dato_carrera.create')); ?>" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Informacion de la carrera de Ingenieria Informatica</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>objetivo</th>
                        <th>mision</th>
                        <th>vision</th>
                        <th>perfil_profesional</th>
                        <th>campo_laboral</th>
                        <th>programas_analiticos</th> 
                        <th>horario_actual</th>
                        <th>malla_curricular</th>
                        <th>plantel_academico</th>
                        <th>id_persona</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $datos_carrera; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato_carrera): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($dato_carrera->codigo); ?></td>
                                <td><?php echo e($dato_carrera->nombre); ?></td>
                                <td><?php echo e($dato_carrera->objetivo); ?></td>
                                <td><?php echo e($dato_carrera->mision); ?></td>
                                <td><?php echo e($dato_carrera->vision); ?></td>
                                <td><?php echo e($dato_carrera->perfil_profesional); ?></td>
                                <td><?php echo e($dato_carrera->campo_laboral); ?></td>
                                <td><?php echo e($dato_carrera->programas_analiticos); ?></td>
                                <td><?php echo e($dato_carrera->horario_actual); ?></td>
                                <td><?php echo e($dato_carrera->malla_curricular); ?></td>
                                <td><?php echo e($dato_carrera->plantel_academico); ?></td>
                                <td><?php echo e($dato_carrera->id_persona); ?></td>
                                <td>
                                    <a href="<?php echo e(route('dato_carrera.edit', [$dato_carrera->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('dato_carrera.destroy', [$dato_carrera->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/dato_carrera/index.blade.php ENDPATH**/ ?>