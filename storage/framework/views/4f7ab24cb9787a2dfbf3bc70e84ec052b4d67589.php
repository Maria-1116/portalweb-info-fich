<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="<?php echo e(route('solicitud_reclamo.create')); ?>" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de solicitudes y reclamos</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>solicitante</th>
                        <th>fecha</th>
                        <th>descripcion</th>
                        <th>url_archivo</th>
                        
                        
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                        <?php $__currentLoopData = $solicitud_reclamos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud_reclamo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($solicitud_reclamo->codigo); ?></td>
                                <td><?php echo e($solicitud_reclamo->solicitante); ?></td>
                                <td><?php echo e($solicitud_reclamo->fecha); ?></td>
                                <td><?php echo e($solicitud_reclamo->descripcion); ?></td>
                                <td><a href="<?php echo e($solicitud_reclamo->url_archivo); ?>" target="_blank" rel="noopener noreferrer">Ir al enlace</a></td>
                                
                               
                                
                                <?php if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO')): ?>
                                    <td>
                                    <a href="<?php echo e(route('solicitud_reclamo.edit', [$solicitud_reclamo->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('solicitud_reclamo.destroy',[$solicitud_reclamo->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                    </td>
                                <?php endif; ?>

                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/solicitud_reclamo/index.blade.php ENDPATH**/ ?>