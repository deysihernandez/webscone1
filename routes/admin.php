<?php
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@getInicio'); 
    Route::get('/users', 'Admin\UserController@getUsers');
    Route::get('/user2', 'Admin\RegisterController@getRegister');
    Route::get('/nuevoestudiante', 'Admin\FormController@getForm');
    Route::get('/matricula1', 'Admin\MatriculaController@getMatricula');
    Route::get('/datosestudiantes', 'Admin\MatriculaController@getDatosestudiantes');
    Route::get('/informacion', 'Admin\MatriculaController@getInfo');
    Route::get('/especialidades', 'Admin\ModalesController@getModales');
    Route::get('/totalalumno','Admin\TotalalumnoController@getPrincipal');
    Route::get('/primerosalud','Admin\PrimerosaludController@getSalud');
    Route::get('/segundosalud','Admin\PrimerosaludController@getSaludd');
    Route::get('/tercerosalud','Admin\PrimerosaludController@getSaluddd');
    Route::get('/primerosoftware','Admin\PrimerosoftwareController@getSoftware');
    Route::get('/segundosoftware','Admin\PrimerosoftwareController@getSoftwaree');
    Route::get('/tercerosoftware','Admin\PrimerosoftwareController@getSoftwareee');
    Route::get('/primeromantenimiento','Admin\PrimeromantenimientoController@getMantenimiento');
    Route::get('/segundomantenimiento','Admin\PrimeromantenimientoController@getMantenimientoo');
    Route::get('/terceromantenimiento','Admin\PrimeromantenimientoController@getMantenimientooo');
    Route::get('/primerogeneral','Admin\PrimerogeneralController@getGeneral');
    Route::get('/primerogeneral2','Admin\PrimerogeneralController@getGeneralb');
    Route::get('/primerogeneral3','Admin\PrimerogeneralController@getGeneralc');
    Route::get('/segundogeneral','Admin\PrimerogeneralController@getGenerall');
    Route::get('/segundogeneral2','Admin\PrimerogeneralController@getGenerallb');
    Route::get('/segundogeneral3','Admin\PrimerogeneralController@getGenerallc');
    Route::get('/primerocontable','Admin\PrimerocontableController@getContable');
    Route::get('/segundocontable','Admin\PrimerocontableController@getContablee');
    Route::get('/tercerocontable','Admin\PrimerocontableController@getContableee');
    //NOTAS POR ESPECIALIDAD AÑO SECCION
    Route::get('/primerosaludnotas','Admin\PrimerosaludController@getSaludnotas');
    Route::get('/segundosaludnotas','Admin\PrimerosaludController@getSaluddnotas');
    Route::get('/tercerosaludnotas','Admin\PrimerosaludController@getSaludddnotas');
    Route::get('/primerosoftwarenotas','Admin\PrimerosoftwareController@getSoftwarenotas');
    Route::get('/segundosoftwarenotas','Admin\PrimerosoftwareController@getSoftwareenotas');
    Route::get('/tercerosoftwarenotas','Admin\PrimerosoftwareController@getSoftwareeenotas');
    Route::get('/primeromantenimientonotas','Admin\PrimeromantenimientoController@getMantenimientonotas');
    Route::get('/segundomantenimientonotas','Admin\PrimeromantenimientoController@getMantenimientoonotas');
    Route::get('/terceromantenimientonotas','Admin\PrimeromantenimientoController@getMantenimientooonotas');
    Route::get('/primerogeneralnotas','Admin\PrimerogeneralController@getGeneralnotas');
    Route::get('/primerogeneral2notas','Admin\PrimerogeneralController@getGeneralbnotas');
    Route::get('/primerogeneral3notas','Admin\PrimerogeneralController@getGeneralcnotas');
    Route::get('/segundogeneralnotas','Admin\PrimerogeneralController@getGenerallnotas');
    Route::get('/segundogeneral2notas','Admin\PrimerogeneralController@getGenerallbnotas');
    Route::get('/segundogeneral3notas','Admin\PrimerogeneralController@getGenerallcnotas');
    Route::get('/primerocontablenotas','Admin\PrimerocontableController@getContablenotas');
    Route::get('/segundocontablenotas','Admin\PrimerocontableController@getContableenotas');
    Route::get('/tercerocontablenotas','Admin\PrimerocontableController@getContableeenotas');
    Route::get('/agregarnotas','Admin\AgregarnotasController@getNotas');
    Route::get('/notas','Admin\AgregarnotasController@getNotass');
    
});