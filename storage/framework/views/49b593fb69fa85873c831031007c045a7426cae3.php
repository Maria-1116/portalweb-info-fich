<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE USUARIO</h5>

        <form action="<?php echo e(route('user.update', [$usuario->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="name" type="text" class="validate" name="name"  value="<?php echo e($usuario->name); ?>" required>
                                <label for="name">name</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="email" type="text" class="validate" name="email"  value="<?php echo e($usuario->email); ?>" required>
                                    <label for="email">email</label>
                                </div>
                            <div class="input-field col s4">
                                <input id="password" type="password" class="validate" name="password" value="<?php echo e($usuario->password); ?>"  required>
                                <label for="password">password</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($persona->codigo=== $usuario->id_persona?'selected':''); ?> value="<?php echo e($persona->codigo); ?>"><?php echo e($persona->codigo.' '.$persona->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="id_persona">id_persona</label>
                            </div>

                            <div class="input-field col s4">
                                <select name="id_roles" id="id_roles" required>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  <?php echo e($rol->id=== $usuario->id_roles?'selected':''); ?> value="<?php echo e($rol->id); ?>"><?php echo e($rol->id.' '.$rol->nombre); ?></option>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/usuario/edit.blade.php ENDPATH**/ ?>