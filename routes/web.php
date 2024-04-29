<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route::get('test10', [Mycontroller::class, 'my_data']);

// Task 2 code ........

Route::get('form1', function(){
    return view('form1');
});
Route::post('recForm1', [Mycontroller::class, 'store']);

// end of task 2 .......

Route::get('/', function () {
    return view('welcome');
});

Route::get('Marian/{id?}', function($id = 0){
    return 'Welcome to my first website '. $id ;
}) //-> where(['id' => '[0-9]+'])
  -> whereNumber('id');

Route::get('course/{name}', function($name){
    return 'Course Name is: '. $name ;
}) //->whereAlpha('name')
  -> whereIn('name', ['laravel','PHP','JS']);

Route::prefix('cars')->group(function(){
    Route::get('bmw',function(){
        return'Category is: BMW';
    });
    Route::get('ferari',function(){
        return'Category is: Ferari';
    });
});

/* Route::fallback(function(){
    return 'Required Page Not Found';
    //return redirect('/');
}); */

// Route::get('test', function(){
//     return view('test');
// });

