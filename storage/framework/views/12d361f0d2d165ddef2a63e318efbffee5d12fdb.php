<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE MODULOS</h5>

        <form action="<?php echo e(route('modulo.update', [$modulo->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nombre" type="text" class="validate" name="nombre"  value="<?php echo e($modulo->nombre); ?>" required>
                                <label for="name">nombre</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="ruta" type="text" class="validate" name="ruta"  value="<?php echo e($modulo->ruta); ?>" required>
                                    <label for="ruta">email</label>
                                </div>
                            
                            <div class="input-field col s4">
                                <select name="id_roles" id="id_roles" required>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  <?php echo e($rol->id=== $modulo->id_roles?'selected':''); ?> value="<?php echo e($rol->id); ?>"><?php echo e($rol->id.' '.$rol->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="id_roles">id_roles</label>
                            </div>


                    </div>
                </form>

                <button class="btn" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/modulo/edit.blade.php ENDPATH**/ ?>