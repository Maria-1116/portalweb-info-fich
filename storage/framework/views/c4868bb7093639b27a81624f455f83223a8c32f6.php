<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE ROLES</h5>

        <form action="<?php echo e(route('roles.update', [$roles->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" class="validate" name="nombre"  value="<?php echo e($roles->nombre); ?>" required>
                                <label for="nombre">nombre</label>
                            </div>
                            
                    </div>
                </form>

                <button class="btn" type="submit">Modificar</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/rol/edit.blade.php ENDPATH**/ ?>