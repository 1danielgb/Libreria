<?php



Route::get('/', function () {
    
    return view('website.index');
    //return "usando git";
});

Route::get('/tienda',function(){
	return view('website.tienda');
});

Route::get('/carrito',function(){
	return view('website.carrito');
});

Route::get('/acceder',function(){
	return view('website.acceder');
});

Route::get('/acerca',function(){
	return view('website.acerca');
});
//Route::post('/form', 'ambientesController@store');


//controladores
Route::get('/controler', 'ambientesController@index');


