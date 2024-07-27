<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/proyectos', function () {
    return view('projectsView');
});

Route::get('/crearProyecto', function () {
    return view('createProjectView');
});

Route::post('/crearProyecto', function () {
    return view('405NotAllowedView');
});

Route::patch('/actualizarProjecto', function () {
    return view('405NotAllowedView');
});

Route::get('/actualizarProjecto', function () {
    return view('updateProjectView');
});

Route::delete('/borrarProjecto', function () {
    return view('405NotAllowedView');
});

Route::get('/borrarProjecto', function () {
    return view('deleteProjectView');
});

