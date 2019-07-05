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
Route::get('/companyloginpage', function () {
    return view('company-login');
});
// Route::get('/', 'CompanyController@addCompany');
Route::post('/company', 'CompanyController@signup');

Route::get( '/company', 'CompanyController@showCompanyDetails');
Route::get('/companyprofile', 'CompanyController@showCompanyDetailsAdmin');
Route::post('company/update/{id}', 'CompanyController@update');
Route::post( 'companyLogin', 'CompanyController@login');


Route::post( 'userLogin', 'Register@login');


// Route::get('/company-login', function () {
//     return view('company-login');
// });

Route::get('/user/{member}',function (App\Member $member){
    return view('user-profile',['user'=>$member]);
});

// Route::get('/company',function (){
//     return view('company-profile');
// });

//Route::get('/useredit',function (){
//    return view('user-edit');
//});


Route::get('/vacancyedit',function (){
    return view('vacancy-edit');
});

Route::get('/vacancy',function (){
    return view('user-vacancy');
});

Route::post('/save','Register@store');

Route::post('/vancancy_store','VacancyController@store');//vacancyform store data;

Route::get('/vacancy-view','VacancyController@index'); //vacancy view;

Route::get('/delete/{id}','VacancyController@destroy'); //delete record

Route::get('/edit/{id}','VacancyController@edit'); //edit table

Route::post('/vacancy_update','VacancyController@update'); //update table
 
Route::get('/member/{id}','MemberController@get');
Route::post('/member','MemberController@update');
Route::post('/member-del/{id}','MemberController@delete');

Route::get('/user-vacancy/{id}','UserApplicationController@view');
