<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s10 offset-s1">

        <h5>REGISTRO DE PERSONA</h5>

        <form action="<?php echo e(route('persona.update', [$persona->codigo])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="codigo" type="number" class="validate" name="codigo" value="<?php echo e($persona->codigo); ?>" required>
                            <label for="codigo">codigo</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="nombre" type="text" class="validate" name="nombre" value="<?php echo e($persona->nombre); ?>" required>
                            <label for="nombre">nombre</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="apellido" type="text" class="validate" name="apellido" value="<?php echo e($persona->apellido); ?>" required>
                            <label for="apellido">apellido</label>
                        </div>
                        <div class="input-field col s4">
                            <select name="sexo" id="sexo" required>
                                <option <?php echo e($persona->sexo==='F'?'selected':''); ?> value="F">Femenino</option>
                                <option <?php echo e($persona->sexo==='M'?'selected':''); ?> value="M">Masculino</option>
                            </select>
                            <label for="sexo">sexo</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="telefono" type="number" class="validate" name="telefono" value="<?php echo e($persona->telefono); ?>" required>
                            <label for="telefono">telefono</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="correo" type="email" class="validate" name="correo" value="<?php echo e($persona->correo); ?>" required>
                            <label for="correo">correo</label>
                        </div>
                        <div class="input-field col s4">
                            <select name="tipo" id="tipo" required>
                                <option <?php echo e($persona->tipo==='SEC'?'selected':''); ?> value="SEC">Secretaria</option>
                                <option <?php echo e($persona->tipo==='COO'?'selected':''); ?> value="COO">Coordinador</option>
                                <option <?php echo e($persona->tipo==='DIR'?'selected':''); ?> value="DIR">Director</option>
                                <option <?php echo e($persona->tipo==='EST'?'selected':''); ?> value="EST">Estudiante</option>
                                <option <?php echo e($persona->tipo==='DOC'?'selected':''); ?> value="DOC">Docente</option>
                            </select>
                            <label for="tipo">tipo</label>
                        </div>
                    </div>
                </form>

                <button class="btn" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/persona/edit.blade.php ENDPATH**/ ?>