<?php
use App\Http\Controllers\ExpenseReportController;

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
// Route::get('admin/query', ['uses' => 'Admin\AdminSearchController@query', 'as' => 'query']);
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/expense_reports','ExpenseReportController');
Route::get('/expense_reports/{id}/confirm-delete',['uses'=>'ExpenseReportController@confirm_delete','as'=>'expense_reports.confirm_delete']);
Route::resource('/expense_reports/{id}/expenses','ExpenseController');
Route::get('/expense_reports/{id}/confirm-send-email',['uses'=>'ExpenseReportController@confirm_send_email','as'=>'expense_reports.confirm_send_email']);
Route::post('/expense_reports/{id}/send-email',['uses'=>'ExpenseReportController@send_email','as'=>'expense_reports.send_email']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
