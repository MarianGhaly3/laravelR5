<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

// day 3  ///////////////////////////////////

use App\Http\Controllers\ClientController;

Route::get('clientform', [ClientController::class, 'create']);

Route::post('insertClient', [ClientController::class, 'store'])
    ->name('insertClient');

// day 3 task (student) //////////////////////////

use App\Http\Controllers\Studentcontroller;

Route::get('studentform', [Studentcontroller::class, 'create']);

Route::post('insertStudent', [Studentcontroller::class, 'store'])
    ->name('insertStudent');

////////////////// end of day 3 task //////////////


Route::get('test10', [Mycontroller::class, 'my_data']);

// Task 2 code ........

Route::get('form1', function(){
    return view('form1');
});
// Route::post('recForm1', [Mycontroller::class, 'store']);
Route::post('formdata', [Mycontroller::class, 'receiveData']);
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

