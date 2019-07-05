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
Route::post('/company', 'CompanyController@signup');

Route::get('/company-login', function () {
    return view('company-login');
});

Route::get('/user/{member}',function (App\Member $member){
    return view('user-profile',['user'=>$member]);
});

Route::get('/company',function (){
    return view('company-profile');
});

//Route::get('/useredit',function (){
//    return view('user-edit');
//});

Route::resource('vacancies','VacancyController');

Route::get('/vacancyedit',function (){
    return view('vacancy-edit');
});

Route::get('/vacancy',function (){
    return view('user-vacancy');
});

Route::post('/save','Register@store');

Route::get('/member/{id}','MemberController@get');
