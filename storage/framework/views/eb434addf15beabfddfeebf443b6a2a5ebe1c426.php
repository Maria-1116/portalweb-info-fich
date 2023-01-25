
<?php $__env->startSection('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <div class="row">
        <div class="col s6">
            <canvas id="myChartCantidadPorPersona"></canvas>
        </div>
        <div class="col s6">
            <canvas id="myChartCantidadPorAnio"></canvas>
        </div>
    </div>

    <div class="row">
        <div class="divider"></div>
    </div>

    <div class="row">
        <div class="col s12">
            <canvas id="myChartCantidadPorFecha"></canvas>
        </div>
    </div>





    <script>

        const estadisticaPorPersona = async () => {
            try {
                const response = await fetch("<?php echo e(route('cantidad_solicitudes_por_persona')); ?>");

                if (response.ok) {
                    const jsonRepsonse = await response.json();

                    mostrarEstadisticaPorPersona(jsonRepsonse);
                }
            } catch (error) {
                console.log('Error en consulta por fetch');
                console.log(error);
            }
        }

        const mostrarEstadisticaPorPersona = (data) => {
            const ctx = document.getElementById('myChartCantidadPorPersona');

            let cantidades = [];
            let personas = [];

            data.forEach((element, i) => {
                cantidades[i] = element.cantidad;
                personas[i] = element.nombre;
            });

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: personas,
                    datasets: [{
                        label: 'Cantidad de solicitudes por Persona',
                        data: cantidades,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        estadisticaPorPersona();








        //*************************************************
        const estadisticaPorFecha = async () => {
            try {
                const response = await fetch("<?php echo e(route('cantidad_solicitudes_por_fecha')); ?>");

                if (response.ok) {
                    const jsonRepsonse = await response.json();

                    mostrarEstadisticaPorFecha(jsonRepsonse);
                }
            } catch (error) {
                console.log('Error en consulta por fetch');
                console.log(error);
            }
        }

        const mostrarEstadisticaPorFecha = (data) => {
            const ctx = document.getElementById('myChartCantidadPorFecha');

            let cantidades = [];
            let fechas = [];

            data.forEach((element, i) => {
                cantidades[i] = element.cantidad;
                fechas[i] = element.fecha;
            });

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: fechas,
                    datasets: [{
                        label: 'Cantidad de solicitudes por Fecha',
                        data: cantidades,
                        borderWidth: 1,
                        borderColor: '#fae127',
                        backgroundColor: '#fefad1',
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        estadisticaPorFecha();











        //*************************************************
        const estadisticaPorAnio = async () => {
            try {
                const response = await fetch("<?php echo e(route('cantidad_solicitudes_por_anio')); ?>");

                if (response.ok) {
                    const jsonRepsonse = await response.json();

                    mostrarEstadisticaPorAnio(jsonRepsonse);
                }
            } catch (error) {
                console.log('Error en consulta por fetch');
                console.log(error);
            }
        }

        const mostrarEstadisticaPorAnio = (data) => {
            const ctx = document.getElementById('myChartCantidadPorAnio');
            console.log(data);
            let cantidades = [];
            let fechas = [];

            data.forEach((element, i) => {
                cantidades[i] = element.cantidad;
                fechas[i] = `${element.fecha}/${element.year}`;
            });

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: fechas,
                    datasets: [{
                        label: 'Cantidad de solicitudes por Meses y Año',
                        data: cantidades,
                        borderWidth: 1,
                            borderColor: '#39cb28',
                            backgroundColor: '#d7f5d4',
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        estadisticaPorAnio();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\condo\Documents\portalweb-info-fich\resources\views/reportes.blade.php ENDPATH**/ ?>