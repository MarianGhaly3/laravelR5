<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;




Auth::routes();

Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');


///// day 3 (clients) + day 4  ///////////////////////////////////

use App\Http\Controllers\ClientController;

Route::get('clients', [ClientController::class, 'index'])->middleware('verified')->name('clients');
Route::get('addClient', [ClientController::class, 'create'])->name('addClient');
Route::get('editClient/{id}', [ClientController::class, 'edit'])->name('editClient');
Route::put('updateClient/{id}', [ClientController::class, 'update'])->name('updateClient');
Route::get('showClient/{id}', [ClientController::class, 'show'])->name('showClient');
Route::delete('deleteClient', [ClientController::class, 'destroy'])->name('deleteClient');
Route::get('trashClient', [ClientController::class, 'trash'])->name('trashClient');
Route::get('restoreClient/{id}', [ClientController::class, 'restore'])->name('restoreClient');
Route::delete('forceDeleteClient', [ClientController::class, 'forceDelete'])->name('forceDeleteClient');

Route::post('ClientInserted', [ClientController::class, 'store'])->name('ClientInserted');


///// day 3 task (student)  + day 4 task //////////////////////////

use App\Http\Controllers\Studentcontroller;

Route::get('addStudent', [Studentcontroller::class, 'create'])->name('addStudent');
Route::get('students', [Studentcontroller::class, 'index'])->name('students');
Route::post('StudentInserted', [Studentcontroller::class, 'store'])->name('StudentInserted');
Route::get('editStudent/{id}', [Studentcontroller::class, 'edit'])->name('editStudent');
Route::put('updateStudent/{id}', [Studentcontroller::class, 'update'])->name('updateStudent');
Route::get('showStudent/{id}', [Studentcontroller::class, 'show'])->name('showStudent');
Route::delete('deleteStudent', [Studentcontroller::class, 'destroy'])->name('deleteStudent');
Route::get('trashStudent', [Studentcontroller::class, 'trash'])->name('trashStudent');
Route::get('restoreStudent/{id}', [Studentcontroller::class, 'restore'])->name('restoreStudent');
Route::delete('forceDeleteStudent', [Studentcontroller::class, 'forceDelete'])->name('forceDeleteStudent');

Route::get('sessions', [Mycontroller::class, 'receiveData']);


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