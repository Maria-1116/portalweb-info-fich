<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s10 offset-s1">

        <h5>MODIFICAR DATOS CARRERA</h5>

        <form action="<?php echo e(route('dato_carrera.update', [$dato_carrera->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <div class="input-field col s4">
                                <input id="codigo" type="text" class="validate" name="codigo"  value="<?php echo e($dato_carrera->codigo); ?>" required>
                                <label for="codigo">codigo</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="nombre" type="text" class="validate" name="nombre"value="<?php echo e($dato_carrera->nombre); ?>" required>
                                <label for="nombre">nombre</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="objetivo" type="text" class="validate" name="objetivo" value="<?php echo e($dato_carrera->objetivo); ?>"required>
                                <label for="objetivo">objetivo</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="mision" type="text" class="validate" name="mision" value="<?php echo e($dato_carrera->mision); ?>" required>
                                <label for="mision">mision</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="vision" type="text" class="validate" name="vision" value="<?php echo e($dato_carrera->vision); ?>" required>
                                <label for="vision">vision</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="perfil_profesional" type="text" class="validate" name="perfil_profesional" value="<?php echo e($dato_carrera->perfil_profesional); ?>" required>
                                <label for="perfil_profesional">perfil_profesional</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="campo_laboral" type="text" class="validate" name="campo_laboral" value="<?php echo e($dato_carrera->campo_laboral); ?>" required>
                                <label for="campo_laboral">campo_laboral</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="programas_analiticos" type="text" class="validate" name="programas_analiticos" value="<?php echo e($dato_carrera->programas_analiticos); ?>" required>
                                <label for="programas_analiticos">programas_analiticos</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="horario_actual" type="text" class="validate" name="horario_actual" value="<?php echo e($dato_carrera->horario_actual); ?>" required>
                                <label for="horario_actual">horario_actual</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="malla_curricular" type="text" class="validate" name="malla_curricular" value="<?php echo e($dato_carrera->malla_curricular); ?>" required>
                                <label for="malla_curricular">malla_curricular</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="plantel_academico" type="text" class="validate" name="plantel_academico" value="<?php echo e($dato_carrera->plantel_academico); ?>" required>
                                <label for="plantel_academico">plantel_academico</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($persona->codigo=== $dato_carrera->id_persona?'selected':''); ?> value="<?php echo e($persona->codigo); ?>"><?php echo e($persona->codigo.' '.$persona->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="id_persona">id_persona</label>
                            </div>

                    </div>
                </form>

                <button class="btn" type="submit">Modificar</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/dato_carrera/edit.blade.php ENDPATH**/ ?>