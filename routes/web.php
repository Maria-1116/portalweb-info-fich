<?php

use App\Http\Controllers\ConvenioController;
use App\Http\Controllers\DatoCarreraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SolicitudReclamoController;
use App\Http\Controllers\TesisController;
use App\Http\Controllers\TipoTitulacionController;
use App\Http\Controllers\UsuarioController;
use App\Models\Persona;
use App\Models\SolicitudReclamo;
use App\Models\Tesis;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dato_carrera.index');
})->name('raiz');



Route::get('/test', function () {
    $permisos = SolicitudReclamo::all();
    return $permisos->tipo;
    // foreach ($permisos as $val) {
    //     echo $val->nombre . ' <br>';
    // }
});

Route::middleware(['auth'])->group(function () {
    Route::get('/persona', [PersonaController::class, 'index'])->name('persona.index');
    Route::get('/persona/create', [PersonaController::class, 'create'])->name('persona.create');
    Route::post('/persona', [PersonaController::class, 'store'])->name('persona.store');
    Route::get('/persona/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
    Route::put('/persona/{id}', [PersonaController::class, 'update'])->name('persona.update');
    Route::get('/persona/{id}', [PersonaController::class, 'destroy'])->name('persona.destroy');

    Route::get('/user', [UsuarioController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UsuarioController::class, 'create'])->name('user.create');
    Route::post('/user', [UsuarioController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UsuarioController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UsuarioController::class, 'update'])->name('user.update');
    Route::get('/user/{id}', [UsuarioController::class, 'destroy'])->name('user.destroy');

    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RolesController::class, 'store'])->name('roles.store');
    Route::get('/roles/{id}/edit', [RolesController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{id}', [RolesController::class, 'update'])->name('roles.update');
    Route::get('/roles/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');

    Route::get('/dato_carrera', [DatoCarreraController::class, 'index'])->name('dato_carrera.index')->withoutMiddleware(['auth']);;
    Route::get('/dato_carrera/create', [DatoCarreraController::class, 'create'])->name('dato_carrera.create');
    Route::post('/dato_carrera', [DatoCarreraController::class, 'store'])->name('dato_carrera.store');
    Route::get('/dato_carrera/{id}/edit', [DatoCarreraController::class, 'edit'])->name('dato_carrera.edit');
    Route::put('/dato_carrera/{id}', [DatoCarreraController::class, 'update'])->name('dato_carrera.update');
    Route::get('/dato_carrera/{id}', [DatoCarreraController::class, 'destroy'])->name('dato_carrera.destroy');

    Route::get('/convenio', [ConvenioController::class, 'index'])->name('convenio.index');
    Route::get('/convenio/create', [ConvenioController::class, 'create'])->name('convenio.create');
    Route::post('/convenio', [ConvenioController::class, 'store'])->name('convenio.store');
    Route::get('/convenio/{id}/edit', [ConvenioController::class, 'edit'])->name('convenio.edit');
    Route::put('/convenio/{id}', [ConvenioController::class, 'update'])->name('convenio.update');
    Route::get('/convenio/{id}', [ConvenioController::class, 'destroy'])->name('convenio.destroy');

    Route::get('/tipo_titulacion', [TipoTitulacionController::class, 'index'])->name('tipo_titulacion.index');
    Route::get('/tipo_titulacion/create', [TipoTitulacionController::class, 'create'])->name('tipo_titulacion.create');
    Route::post('/tipo_titulacion', [TipoTitulacionController::class, 'store'])->name('tipo_titulacion.store');
    Route::get('/tipo_titulacion/{id}/edit', [TipoTitulacionController::class, 'edit'])->name('tipo_titulacion.edit');
    Route::put('/tipo_titulacion/{id}', [TipoTitulacionController::class, 'update'])->name('tipo_titulacion.update');
    Route::get('/tipo_titulacion/{id}', [TipoTitulacionController::class, 'destroy'])->name('tipo_titulacion.destroy');


    Route::get('/tesis', [TesisController::class, 'index'])->name('tesis.index');
    Route::get('/tesis/create', [TesisController::class, 'create'])->name('tesis.create');
    Route::post('/tesis', [TesisController::class, 'store'])->name('tesis.store');
    Route::get('/tesis/{id}/edit', [TesisController::class, 'edit'])->name('tesis.edit');
    Route::put('/tesis/{id}', [TesisController::class, 'update'])->name('tesis.update');
    Route::get('/tesis/{id}', [TesisController::class, 'destroy'])->name('tesis.destroy');

    Route::get('/solicitud_reclamo', [SolicitudReclamoController::class, 'index'])->name('solicitud_reclamo.index');
    Route::get('/solicitud_reclamo/create', [SolicitudReclamoController::class, 'create'])->name('solicitud_reclamo.create');
    Route::post('/solicitud_reclamo', [SolicitudReclamoController::class, 'store'])->name('solicitud_reclamo.store');
    Route::get('/solicitud_reclamo/{id}/edit', [SolicitudReclamoController::class, 'edit'])->name('solicitud_reclamo.edit');
    Route::put('/solicitud_reclamo/{id}', [SolicitudReclamoController::class, 'update'])->name('solicitud_reclamo.update');
    Route::get('/solicitud_reclamo/{id}', [SolicitudReclamoController::class, 'destroy'])->name('solicitud_reclamo.destroy');

    Route::get('/modulo', [ModuloController::class, 'index'])->name('modulo.index');
    Route::get('/modulo/create', [ModuloController::class, 'create'])->name('modulo.create');
    Route::post('modulo', [ModuloController::class, 'store'])->name('modulo.store');
    Route::get('/modulo/{id}/edit', [ModuloController::class, 'edit'])->name('modulo.edit');
    Route::put('/modulo/{id}', [ModuloController::class, 'update'])->name('modulo.update');
    Route::get('/modulo/{id}', [ModuloController::class, 'destroy'])->name('modulo.destroy');



    // BUSCADOR GENERAL
    Route::get('/buscador-general', [HomeController::class, 'buscador'])->name('buscador');

    Route::get('/reportes', function () {
        return view('reportes');
    })->name('reporte.index');



    //REPORTES Y ESTAD'ISTICAS
    Route::get('/cantidad_solicitudes_por_persona', function () {
        $cantidad_solicitudes_por_persona = DB::select("SELECT count(id) as cantidad, max(persona.nombre || ' ' || persona.apellido) as nombre FROM solicitud_reclamo
                                INNER JOIN persona ON persona.codigo = solicitud_reclamo.id_persona
                                GROUP BY persona.nombre || ' ' || persona.apellido
                                LIMIT 6;");
        return response($cantidad_solicitudes_por_persona);
    })->name('cantidad_solicitudes_por_persona');

    Route::get('/cantidad_solicitudes_por_fecha', function () {
        $cantidad_solicitudes_por_fecha = DB::select("SELECT count(id) as cantidad, max(solicitud_reclamo.fecha) as fecha FROM solicitud_reclamo
                                                        INNER JOIN persona ON persona.codigo = solicitud_reclamo.id_persona
                                                        GROUP BY solicitud_reclamo.fecha
                                                        LIMIT 12;
                                                        ");
        return response($cantidad_solicitudes_por_fecha);
    })->name('cantidad_solicitudes_por_fecha');

    Route::get('/cantidad_solicitudes_por_anio', function () {
        $cantidad_solicitudes_por_anio = DB::select("SELECT 
                                                    count(id) as cantidad,  
                                                    EXTRACT(MONTH FROM solicitud_reclamo.fecha) as fecha, 
                                                    EXTRACT(YEAR FROM solicitud_reclamo.fecha) as year
                                                    FROM solicitud_reclamo
                                                    INNER JOIN persona ON persona.codigo = solicitud_reclamo.id_persona
                                                    GROUP BY (EXTRACT(MONTH FROM solicitud_reclamo.fecha), EXTRACT(YEAR FROM solicitud_reclamo.fecha))
                                                    ORDER BY year, fecha asc
                                                    LIMIT 6;
                                                    ");
        return response($cantidad_solicitudes_por_anio);
    })->name('cantidad_solicitudes_por_anio');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
