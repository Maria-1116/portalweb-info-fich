<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="<?php echo e(route('roles.create')); ?>" class="waves-effect waves-light btn">Registrar</a>
        </div>
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de Roles</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>nombre</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $roless; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($roles->nombre); ?></td>
                                
                                <td>
                                    <a href="<?php echo e(route('roles.edit', [$roles->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('roles.destroy', [$roles->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/rol/index.blade.php ENDPATH**/ ?>