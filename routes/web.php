<?php
// use Symfony\Component\Routing\Route;
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

Route::get('/', function () {
    return view('login');
});
Route::get('/companysignup', function () {
    return view( 'company-signup');
});
Route::get('/companylogin', function () {
    return view('company-login');
});
// Route::get('/', 'CompanyController@addCompany');
Route::post('/company','CompanyController@store');

Route::get('/user',function (){
    return view('user-profile');
});

Route::get('/company',function (){
    return view('company-profile');
});

Route::get('/useredit',function (){
    return view('user-edit');
});
