<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col s10 offset-s1">

            <h5>REGISTRO DE SOLICITUDES Y RECLAMOS </h5>

            <form action="<?php echo e(route('solicitud_reclamo.store')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="codigo" type="number" class="validate" name="codigo" value="<?php echo e(auth()->user()->persona->codigo); ?>" required>
                                <label for="codigo">codigo</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="solicitante" type="text" class="validate" name="solicitante" value="<?php echo e(auth()->user()->persona->nombre.' '.auth()->user()->persona->apellido); ?>" required>
                                <label for="solicitante">solicitante</label>
                            </div>
                            
                            <div class="input-field col s4">
                                <input id="fecha" type="date" class="validate" name="fecha" required>
                                <label for="fecha">fecha</label>
                            </div>

                            <div class="input-field col s4">
                                <input id="descripcion" type="text" class="validate" name="descripcion" required>
                                <label for="descripcion">descripcion</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="url_archivo" type="text" class="validate" name="url_archivo" required>
                                <label for="url_archivo">url_archivo</label>
                            </div>

                            


                        </div>
                    </form>

                    <button class="btn" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/solicitud_reclamo/create.blade.php ENDPATH**/ ?>