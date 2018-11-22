<?php

Route::view('/', "enunciado");
Route::view('/hoteles', 'hotel.index');
Route::view('/clientes', 'cliente.index');
Route::view('/reserva', 'reserva.list');
Route::view('/formCliente', 'cliente.create');
Route::post('/insert', 'ControladorExamen@store');
Route::get('/clientes', 'ControladorExamen@getClientes');
Route::get('/hoteles', 'ControladorExamen@getHoteles');