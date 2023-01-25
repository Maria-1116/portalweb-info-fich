<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRO DE DATOS CARRERA </h5>

            <form action="<?php echo e(route('dato_carrera.store')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="codigo" type="number" class="validate" name="codigo" required>
                                <label for="codigo">codigo</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="nombre" type="text" class="validate" name="nombre" required>
                                <label for="nombre">nombre</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="objetivo" type="text" class="validate" name="objetivo" required>
                                <label for="objetivo">objetivo</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="mision" type="text" class="validate" name="mision" required>
                                <label for="mision">mision</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="vision" type="text" class="validate" name="vision" required>
                                <label for="vision">vision</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="perfil_profesional" type="text" class="validate" name="perfil_profesional" required>
                                <label for="perfil_profesional">perfil_profesional</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="campo_laboral" type="text" class="validate" name="campo_laboral" required>
                                <label for="campo_laboral">campo_laboral</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="programas_analiticos" type="text" class="validate" name="programas_analiticos" required>
                                <label for="programas_analiticos">programas_analiticos</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="horario_actual" type="text" class="validate" name="horario_actual" required>
                                <label for="horario_actual">horario_actual</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="malla_curricular" type="text" class="validate" name="malla_curricular" required>
                                <label for="malla_curricular">malla_curricular</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="plantel_academico" type="text" class="validate" name="plantel_academico" required>
                                <label for="plantel_academico">plantel_academico</label>
                            </div>
                            <div class="input-field col s4">
                                <select name="id_persona" id="id_persona" required>

                                    <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($persona->codigo); ?>"><?php echo e($persona->codigo.' '.$persona->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="id_persona">id_persona</label>
                            </div>

                            
                        </div>
                    </form>

                    <button class="btn" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/dato_carrera/create.blade.php ENDPATH**/ ?>