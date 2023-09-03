<?php

//use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|rutas de la aplicacion
contiene cockies

*/
/**/ /*
Route::get('/', function () {
    return "Hola desde la pagina de inicio";
});


Route::get('contactos', function () {
    return "Hola desde la pagina de contacto";
});


Route::get('contactanos', function () {
    return "Hola desde la pagina de contacto";
})->name('contactos');

/*con parametros
Route:: get('saludo/{nombre?}', function($nombre ="Invitado"){
    return "Saludos". $nombre;
});*/

/*Route:: get()
Route:: post()// formulario
Route:: put()
Route:: patch()
Route:: delete()

//Rutas con nombre o route name.


    Route:: get('/', function(){
        echo "<a href='". route('contactos')."'> Contacto1 </a><br>";
        echo "<a href='". route('contactos')."'> Contacto2 </a><br>";
        echo "<a href='". route('contactos')."'> Contacto3 </a><br>";
        echo "<a href='". route('contactos')."'> Contacto4 </a><br>";
        echo "<a href='". route('contactos')."'> Contacto5 </a><br>";
        echo "<a href='". route('contactos')."'> Contacto6 </a><br>";

    });*/

  //  Route::get('/', function () { 
    //  $nombre ="Jorge";
        
        //no hace falta poner toda la ruta : resoursce/views/welcome.blade.php
        // el ya reconoce cuando es una vista donde debe buscar y que extension debe tener. 
        //return view('home') ->with('nombre',$nombre); si funciono
       // return view('home')->with(['nombre'->$nombre ]);//funcion with no me funciono
      // return view('home',['nombre'->$nombre ]); no me funciono
      //return view('home',compact('nombre')); //si funciono
   // })->name('home'); 


   $varportafolio = [
    ['title' =>'Proyecto #1'],
    ['title'=> 'Proyecto #2'],
    ['title'=> 'Proyecto #3'],
    ['title'=> 'Proyecto #4'],
   ];

       Route::view('/','home')->name('home');
       Route:: view('/about','about')->name('about');
       Route:: view('/portafolio','portafolio', compact('varportafolio'))->name('varportafolio');
       Route:: view('/contacto','contacto')->name('contacto');


    