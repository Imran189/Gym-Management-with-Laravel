<?php

use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\TrainerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');


///////////////////////////////Route For Backend//////////////////

Route::get('/logout', [IndexController::class, 'Logout'])->name('admin.logout');

//////////////////////////ALl Student Routes/////////////////////////
Route::prefix('/students')->group(function () {

    Route::get('/all', [StudentController::class, 'ViewStudent'])->name('ongoing.student');

    Route::get('/add', [StudentController::class, 'AddStudent'])->name('add.student');

    Route::post('/store', [StudentController::class, 'StoreStudent'])->name('store.student');

    Route::get('/edit/{id}', [StudentController::class, 'EditStudent'])->name('edit.student');

    Route::post('/update/{id}', [StudentController::class, 'UpdateStudent'])->name('update.student');
});

Route::prefix('/trainer')->group(function () {

    Route::get('/view', [TrainerController::class, 'AddTrainer'])->name('view.trainer');
    Route::post('/add', [TrainerController::class, 'StoreTrainer'])->name('store.trainer');

    Route::get('/edit/{id}', [TrainerController::class, 'EditTrainer'])->name('edit.trainer');
    Route::post('/update/{id}', [TrainerController::class, 'UpdateTrainer'])->name('update.trainer');

    Route::get('/delete/{id}', [TrainerController::class, 'DeleteTrainer'])->name('delete.trainer');
});
