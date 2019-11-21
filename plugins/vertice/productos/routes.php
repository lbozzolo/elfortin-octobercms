<?php

Route::get('/productos/{id}', function () {
    return 'Hello World';
});

Route::get('productos/{id}', [
    'as' => 'productos.show',
    'uses' => 'ProductoController@destacar'
]);