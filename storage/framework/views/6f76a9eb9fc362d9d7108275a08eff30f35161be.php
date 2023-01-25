<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col s10 offset-s1">

        <h5>MODIFICAR DATOS DE TESIS</h5>

        <form action="<?php echo e(route('tesis.update', [$tesis->id])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="codigo" type="number" class="validate" name="codigo" value="<?php echo e($tesis->codigo); ?>"required>
                            <label for="codigo">codigo</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="nombre" type="text" class="validate" name="nombre"value="<?php echo e($tesis->nombre); ?>" required>
                            <label for="nombre">nombre</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="fecha_defensa" type="date" class="validate" name="fecha_defensa" value="<?php echo e($tesis->fecha_defensa); ?>"required>
                            <label for="fecha_defensa">fecha_defensa</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="autor" type="text" class="validate" name="autor" value="<?php echo e($tesis->autor); ?>"required>
                            <label for="autor">autor</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="jurados" type="text" class="validate" name="jurados" value="<?php echo e($tesis->jurados); ?>"required>
                            <label for="jurados">jurados</label>
                        </div>  
                        <div class="input-field col s4">
                            <input id="url" type="text" class="validate" name="url"value="<?php echo e($tesis->url); ?>" required>
                            <label for="url">url</label>
                        </div>                            
                        <div class="input-field col s4">
                            <select name="id_persona" id="id_persona" required>

                                <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($persona->codigo=== $tesis->id_persona?'selected':''); ?> value="<?php echo e($persona->codigo); ?>"><?php echo e($persona->codigo.' '.$persona->nombre); ?></option>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/tesis/edit.blade.php ENDPATH**/ ?>