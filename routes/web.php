<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

///// day 3 (clients) + day 4  ///////////////////////////////////

use App\Http\Controllers\ClientController;

Route::get('addClient', [ClientController::class, 'create'])->name('addClient');
Route::get('clients', [ClientController::class, 'index'])->name('clients');

// day 5
Route::get('editClient/{id}', [ClientController::class, 'edit'])->name('editClient');
Route::put('updateClient/{id}', [ClientController::class, 'update'])->name('updateClient');
Route::get('showClient/{id}', [ClientController::class, 'show'])->name('showClient');
Route::delete('deleteClient', [ClientController::class, 'destroy'])->name('deleteClient');

Route::post('ClientInserted', [ClientController::class, 'store'])->name('ClientInserted');


///// day 3 task (student)  + day 4 task //////////////////////////

use App\Http\Controllers\Studentcontroller;

Route::get('addStudent', [Studentcontroller::class, 'create'])->name('addStudent');
Route::get('students', [Studentcontroller::class, 'index'])->name('students');

// day 5 task
Route::get('editStudent/{id}', [Studentcontroller::class, 'edit'])->name('editStudent');
Route::put('updateStudent/{id}', [Studentcontroller::class, 'update'])->name('updateStudent');
Route::get('showStudent/{id}', [Studentcontroller::class, 'show'])->name('showStudent');
Route::delete('deleteStudent', [Studentcontroller::class, 'destroy'])->name('deleteStudent');

Route::post('StudentInserted', [Studentcontroller::class, 'store'])->name('StudentInserted');

//////////////////  end of day 3 + day 4 task  ///////////////////

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

