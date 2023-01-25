<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        
        <?php if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO')): ?>
            <div class="col s4">

                <a href="<?php echo e(route('tesis.create')); ?>" class="waves-effect waves-light btn">Registrar</a>
            </div>
        <?php endif; ?>
        
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de tesis</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>fecha_defensa</th>
                        <th>autor</th>
                        <th>jurados</th>
                        <th>enlace</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tesiss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tesis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($tesis->codigo); ?></td>
                                <td><?php echo e($tesis->nombre); ?></td>
                                <td><?php echo e($tesis->fecha_defensa); ?></td>
                                <td><?php echo e($tesis->autor); ?></td>
                                <td><?php echo e($tesis->jurados); ?></td>
                                
                                <td><a href="<?php echo e($tesis->url); ?>" target="_blank" rel="noopener noreferrer">Ir al enlace</a></td>
                                

                                <?php if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO')): ?>
                                <td>
                                         <a href="<?php echo e(route('tesis.edit', [$tesis->id])); ?>"><span class="new badge amber accent-4"
                                            data-badge-caption="editar"></span></a>
                                            <a href="<?php echo e(route('tesis.destroy', [$tesis->id])); ?>"><span class="new badge red"
                                            data-badge-caption="eliminar"></span></a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/tesis/index.blade.php ENDPATH**/ ?>