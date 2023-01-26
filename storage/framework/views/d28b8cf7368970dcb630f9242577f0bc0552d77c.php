<?php $__env->startSection('content'); ?>

    <div class="row" style="margin-top: 5%">
        <?php if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO')): ?>
            <div class="col s4">

                <a href="<?php echo e(route('convenio.create')); ?>" class="waves-effect waves-light btn">Registrar</a>
            </div>
        <?php endif; ?>
        
        <div class="col s8">
            <span class="right" style="font-size: 20pt">Lista de convenios</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>descripcion</th>
                        <th>institucion</th>
                        <th>area</th>
                        <th>duracion</th>
                        <th>requisitos</th>
                        <th>url</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $convenios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $convenio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($convenio->descripcion); ?></td>
                                <td><?php echo e($convenio->institucion); ?></td>
                                <td><?php echo e($convenio->area); ?></td>
                                <td><?php echo e($convenio->duracion); ?></td>
                                <td><?php echo e($convenio->requisitos); ?></td>
                                <td><a href="<?php echo e($convenio->url); ?>" target="_blank" rel="noopener noreferrer">Ir al enlace</a></td>
                                

                                <?php if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO')): ?>
                                <td>
                                    <a href="<?php echo e(route('convenio.edit', [$convenio->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('convenio.destroy',[$convenio->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/convenio/index.blade.php ENDPATH**/ ?>