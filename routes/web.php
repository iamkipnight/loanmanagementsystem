<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowerController;

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

Route::get('/', function () {

     //return view('welcome');

    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::resource('borrowers', BorrowerController::class);

Route::get('/company', 'BorrowersController@index')->name('borrower.index');
Route::get('/companies', 'CompanyController@get_company_data')->name('data');
Route::get('/addcompany', 'CompanyController@view')->name('company.view');
Route::post('/addcompany', 'CompanyController@Store')->name('company.store');
Route::delete('/addcompany/{id}', 'CompanyController@destroy')->name('company.destroy');
Route::get('/addcompany/{id}/edit', 'CompanyController@update')->name('company.update');
