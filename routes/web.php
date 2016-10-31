<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['web']],function(){
  /*  route::get('usuario',function(){
        return 'Hola Mundo';
    });
    //Rutas con parametros y restricciones
    route::get('usuario/{codigo}',function($codigo){
        return 'Hola Usuario '.$codigo;
    })->where('codigo','[0-9]+');
*/
    /*route::get('animales/{nombre}',function($nombre){
        return 'Hola '.$nombre;
    })->where('nombre','[A-Za-z]+');*/
    //Rutas apuntando a un controlador
    //route::get('producto','Producto\ProductoController@index');
    //Controlador con recursos REST
    //route::resource('marca','Producto\MarcaController');
    /****************************************************/


    //route::get('panel','Desktop\AdministradorController@panel');
    //route::get('access','Desktop\AdministradorController@access');
    //route::get('reports','Desktop\AdministradorController@reports');

/*****************************************************************************/

    route::get('dashboards','Desktop\DashboardsController@index');
    //route::get('product','Producto\ProductController@index');
    route::resource('product','Producto\ProductController');
    route::get('modelweb','Desktop\DashboardController@modelweb');

});
