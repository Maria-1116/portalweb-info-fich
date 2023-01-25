<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRO DE USUARIO</h5>

            <form action="<?php echo e(route('user.store')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="username" type="text" class="validate" name="username" required>
                                <label for="username">username</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="email" type="email" class="validate" name="email" required>
                                <label for="email">email</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="password" type="password" class="validate" name="password" required>
                                <label for="password">password</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($persona->codigo); ?>"><?php echo e($persona->codigo.' '.$persona->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="id_persona">id_persona</label>
                            </div>

                            <div class="input-field col s4">
                                <select name="id_roles" id="id_roles" required>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($rol->id); ?>"><?php echo e($rol->id.' '.$rol->nombre); ?></option>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/usuario/create.blade.php ENDPATH**/ ?>