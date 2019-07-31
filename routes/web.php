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
