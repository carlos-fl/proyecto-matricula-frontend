<?php

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', [LandingController::class, 'landing'])->name('landing');

//empleado
Route::get('/empleado/login', [EmpleadoController::class, 'empleadoLogin'])->name('empleado.login');
Route::get('/empleado/home', [EmpleadoController::class, 'vistaPrincipalEmpleado'])->name('empleado.home');
Route::get('/registro/expediente/revisar', [EmpleadoController::class, 'expedienteRevisar'])->name('expediente.revisar');
Route::get('/registro/docente/crear', [EmpleadoController::class, 'crearDocente'])->name('crear.docente');
Route::get('/registro/matricula/establecer', [EmpleadoController::class, 'establecerMatricula'])->name('establecer.matricula');
Route::get('/empleado/logout', [EmpleadoController::class, 'logout'])->name('logout');
Route::get('/registrar/carrera', [EmpleadoController::class, 'registrarCarrera'])->name('registrar.carrera');
Route::get('/registrar/edificio', [EmpleadoController::class, 'registrarEdificio'])->name('registrar.edificio');
Route::get('/registrar/salon', [EmpleadoController::class, 'registrarSalon'])->name('registrar.salon');
Route::get('/registro/expediente/docente/revisar', [EmpleadoController::class, 'expedienteDocenteRevisar'])->name('expediente.docente.revisar');
// estudiantes
Route::get('/estudiante/login', [EstudianteController::class, 'estudianteLogin'])->name('estudiante.login');
Route::get('/estudiante/expediente/form', [EstudianteController::class, 'expedienteEstudianteForm'])->name('estudiante.expediente.form');
Route::post('/expediente/mandar', [EstudianteController::class, 'mandarExpediente'])->name('expediente.mandar');
Route::get('/estudiante/formulario/enviado', [EstudianteController::class, 'formularioEnviado'])->name('formulario.enviado');
// docente
Route::get('/docente/login', [DocenteController::class, 'docenteLogin'])->name('docente.login');
Route::get('/docente/home',  [DocenteController::class, 'vistaPrincipalDocente'])->name('docente.home');
Route::get('/docente/logout',[DocenteController::class, 'logout'])->name('docente.logout');
Route::get('/docente/clases',[DocenteController::class, 'verClases'])->name('docente.verClases');
Route::get('/docente/perfil',[DocenteController::class, 'docentePerfil'])->name('docente.perfil');