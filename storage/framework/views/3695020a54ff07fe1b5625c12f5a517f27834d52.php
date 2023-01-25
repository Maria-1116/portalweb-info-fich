<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s10 offset-s1">

        <h5>MODIFICAR DATOS DE CONVENIO</h5>

        <form action="<?php echo e(route('convenio.update', [$convenio->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="descripcion" type="text" class="validate" name="descripcion" value="<?php echo e($convenio->descripcion); ?>"required>
                            <label for="descripcion">descripcion</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="institucion" type="text" class="validate" name="institucion"value="<?php echo e($convenio->institucion); ?>" required>
                            <label for="institucion">institucion</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="area" type="text" class="validate" name="area" value="<?php echo e($convenio->area); ?>"required>
                            <label for="area">area</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="duracion" type="text" class="validate" name="duracion" value="<?php echo e($convenio->duracion); ?>"required>
                            <label for="duracion">duracion</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="requisitos" type="text" class="validate" name="requisitos" value="<?php echo e($convenio->requisitos); ?>"required>
                            <label for="requisitos">requisitos</label>
                        </div>  
                        <div class="input-field col s4">
                            <input id="url" type="text" class="validate" name="url"value="<?php echo e($convenio->url); ?>" required>
                            <label for="url">url</label>
                        </div>                            
                        <div class="input-field col s4">
                            <select name="id_persona" id="id_persona" required>

                                <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($persona->codigo=== $convenio->id_persona?'selected':''); ?> value="<?php echo e($persona->codigo); ?>"><?php echo e($persona->codigo.' '.$persona->nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label for="id_persona">id_persona</label>
                        </div>


                    </div>
                </form>

                <button class="btn" type="submit">MODIFICAR</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/grupo01cc/portalweb-info-fich/resources/views/convenio/edit.blade.php ENDPATH**/ ?>