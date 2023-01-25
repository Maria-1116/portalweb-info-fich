<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <form action="<?php echo e(route('buscador')); ?>" class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input id="texto" type="text" class="validate" name="texto" required>
                    <label for="texto">buscador</label>
                </div>

                <div class="input-field col s12">
                    <button class="btn" type="submit">Buscar</button>
                </div>
            </div>
        </form>

        <h4>Busqueda por el termino: <?php echo e($texto); ?></h4>
    </div>
    
    <div class="row"><div class="divider"></div></div>

    <div class="row" style="margin-top: 5%">
        <div class="col s12">
            <span class="right" style="font-size: 20pt">Resultados para solicitudes y reclamos</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>solicitante</th>
                        <th>fecha</th>
                        <th style="color: lime">descripcion</th>
                        <th>url_archivo</th>
                        
                        
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                        <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud_reclamo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($solicitud_reclamo->codigo); ?></td>
                                <td><?php echo e($solicitud_reclamo->solicitante); ?></td>
                                <td><?php echo e($solicitud_reclamo->fecha); ?></td>
                                <td style="color: lime"><?php echo e($solicitud_reclamo->descripcion); ?></td>
                                <td><a href="<?php echo e($solicitud_reclamo->url_archivo); ?>" target="_blank" rel="noopener noreferrer">Ir al enlace</a></td>
                                
                               
                                
                                <?php if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO')): ?>
                                    <td>
                                    <a href="<?php echo e(route('solicitud_reclamo.edit', [$solicitud_reclamo->id])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('solicitud_reclamo.destroy',[$solicitud_reclamo->id])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                    </td>
                                <?php endif; ?>

                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="divider"></div>
    </div>


    <div class="row" style="margin-top: 5%">
        <div class="col s12">
            <span class="right" style="font-size: 20pt">Resultados para Personas</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th style="color: lime">nombre</th>
                        <th style="color: lime">apellido</th>
                        <th>sexo</th>
                        <th>telefono</th>
                        <th>correo</th>
                        <th>tipo</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($persona->codigo); ?></td>
                                <td  style="color: lime"><?php echo e($persona->nombre); ?></td>
                                <td  style="color: lime"><?php echo e($persona->apellido); ?></td>
                                <td><?php echo e($persona->sexo); ?></td>
                                <td><?php echo e($persona->telefono); ?></td>
                                <td><?php echo e($persona->correo); ?></td>
                                <td>
                                    <?php if($persona->tipo==='SEC'): ?>
                                    <?php echo e('Secretaria'); ?>

                                    <?php endif; ?>
                                    <?php if($persona->tipo==='COO'): ?>
                                    <?php echo e('Coordinador'); ?>

                                    <?php endif; ?>
                                    <?php if($persona->tipo==='DIR'): ?>
                                    <?php echo e('Director'); ?>

                                    <?php endif; ?>
                                    <?php if($persona->tipo==='EST'): ?>
                                    <?php echo e('Estudiante'); ?>

                                    <?php endif; ?>
                                    <?php if($persona->tipo==='DOC'): ?>
                                    <?php echo e('Docente'); ?>

                                    <?php endif; ?>
                                    <td>
                                
                                <td>
                                    <?php if(!auth()->user()->persona->tipo === 'EST'): ?>
                                    <a href="<?php echo e(route('persona.edit', [$persona->codigo])); ?>"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="<?php echo e(route('persona.destroy', [$persona->codigo])); ?>"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="divider"></div>
    </div>




    <div class="row" style="margin-top: 5%">
        <div class="col s12">
            <span class="right" style="font-size: 20pt">Resultados para tesis</span>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th style="color: lime">nombre</th>
                        <th>fecha_defensa</th>
                        <th>autor</th>
                        <th>jurados</th>
                        <th>enlace</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tesiss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tesis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($tesis->codigo); ?></td>
                                <td style="color: lime"><strong><?php echo e($tesis->nombre); ?></strong></td>
                                <td><?php echo e($tesis->fecha_defensa); ?></td>
                                <td><?php echo e($tesis->autor); ?></td>
                                <td><?php echo e($tesis->jurados); ?></td>
                                
                                <td><a href="<?php echo e($tesis->url); ?>" target="_blank" rel="noopener noreferrer">Ir al enlace</a></td>
                                

                                <?php if( (auth()->user()->persona->tipo === 'SEC') || (auth()->user()->persona->tipo === 'DIR') || (auth()->user()->persona->tipo === 'COO')): ?>
                                <td>
                                         <a href="<?php echo e(route('tesis.edit', [$tesis->id])); ?>"><span class="new badge amber accent-4"
                                            data-badge-caption="editar"></span></a>
                                            <a href="<?php echo e(route('tesis.destroy', [$tesis->id])); ?>"><span class="new badge red"
                                            data-badge-caption="eliminar"></span></a>
                                     </td>
                                <?php endif; ?>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/buscador.blade.php ENDPATH**/ ?>