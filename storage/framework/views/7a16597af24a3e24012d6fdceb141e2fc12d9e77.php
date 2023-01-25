<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="<?php echo e(route('persona.create')); ?>" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de Persona</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>sexo</th>
                        <th>telefono</th>
                        <th>correo</th>
                        <th>tipo</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($persona->codigo); ?></td>
                                <td><?php echo e($persona->nombre); ?></td>
                                <td><?php echo e($persona->apellido); ?></td>
                                <td><?php echo e($persona->sexo); ?></td>
                                <td><?php echo e($persona->telefono); ?></td>
                                <td><?php echo e($persona->correo); ?></td>
                                <td>
                                    <?php if($persona->tipo==='SEC'): ?>
                                    <?php echo e('Secretaria'); ?>

                                    <?php endif; ?>
                                    <?php if($persona->tipo==='COO'): ?>
                                    <?php echo e('Coordinador'); ?>

                                    <?php endif; ?>
                                    <?php if($persona->tipo==='DIR'): ?>
                                    <?php echo e('Director'); ?>

                                    <?php endif; ?>
                                    <?php if($persona->tipo==='EST'): ?>
                                    <?php echo e('Estudiante'); ?>

                                    <?php endif; ?>
                                    <?php if($persona->tipo==='DOC'): ?>
                                    <?php echo e('Docente'); ?>

                                    <?php endif; ?>
                                    <td>
                                
                                <td>
                                    <a href="<?php echo e(route('persona.edit', [$persona->codigo])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('persona.destroy', [$persona->codigo])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/persona/index.blade.php ENDPATH**/ ?>