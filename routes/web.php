<?php

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
    return view('index.dale');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////mis rutas de prueba

Route::resource('/busines', 'BusinessController')->names('busines');

Route::resource('/careers', 'CareersController')->names('careers');

Route::resource('/covenant', 'CovenantsController')->names('covenant');

Route::resource('/degreestudy', 'DegreestudiesController')->names('degreestudy');

Route::resource('/permission', 'PermissionsController')->names('permission');

Route::resource('/post', 'PostsController')->names('post');

Route::resource('/project', 'ProjectsController')->names('project');

Route::resource('/relative', 'RelativesController')->names('relative');

Route::resource('/report', 'ReportsController')->names('report');

Route::resource('/resident', 'ResidentsController')->names('resident');

Route::resource('/role', 'RolesController')->names('role');

Route::resource('/sector', 'SectorsController')->names('sector');

Route::resource('/semester', 'SemestersController')->names('semester');

Route::resource('/situation', 'SituationprojectsController')->names('situation');

Route::resource('/staffresident', 'StaffresidentsController')->names('staffresident');

Route::resource('/staff', 'StaffsController')->names('staff');

Route::resource('/studyplan', 'StudiesplansController')->names('studyplan');

Route::resource('/titular', 'TitularsController')->names('titular');

Route::resource('/turn', 'TurnsController')->names('turn');

Route::resource('/typebeca', 'TypeBecaController')->names('typebeca');

Route::resource('/typefamily', 'TypefamiliesController')->names('typefamily');

Route::resource('/typefile', 'TypeFileController')->names('typefile');

Route::resource('/typesafe', 'TypesafesController')->names('typesafe');

Route::resource('/user', 'UsersController')->names('user');