<?php

use App\Http\Controllers\ProjectController;
use App\Models\Project;
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

Route::get('/',['uses'=>'MainController@home']);


Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
//project
Route::resource('home','ProjectController');
Route::post('',['as'=>'insert', 'uses'=>'ProjectController@insertProject']);
Route::post('/project/update/{id}',['as'=>'updateProject', 'uses'=> 'ProjectController@updateProject']);
Route::get('projectadd', ['as'=>'projadd','uses'=>'ProjectController@addProject']);
Route::get('projectedit/{id}', ['as'=>'projedit', 'uses' => 'ProjectController@editProject']);
Route::get('projecthome', ['as'=>'home', 'uses'=>'ProjectController@home']);
Route::get('projectdetail/{id}', ['as'=>'projdetail','uses'=>'ProjectController@getProjectDetail']);
Route::get('projectlist', ['as'=>'projlist','uses'=>'ProjectController@listProject']);
Route::get('projectdelete/{id}', ['as'=>'projdel', 'uses' => 'ProjectController@delProject']);
Route::get('project', ['as'=>'project','uses'=>'ProjectController@project']);
Route::get('/search', ['as'=>'search','uses'=>'MainController@search']);
//staff
Route::get('staff',  ['as'=>'prostaf', 'uses'=>'StaffController@staff']);
Route::get('staffadd', ['uses'=>'StaffController@addStaff']);
Route::get('staffdetail', ['uses'=>'StaffController@detailStaff']);

//location
Route::get('location',  ['as' =>'proloca', 'uses'=>'LocationController@location']);
Route::get('locationadd', ['as' =>'locadd','uses'=>'LocationController@addLocation']);
Route::post('/location/add', ['as'=>'locaadd', 'uses'=>'LocationController@insertLocation']);
Route::get('locationdetail/{id}', ['as' =>'locadetail','uses'=>'LocationController@detailLocation']);
Route::get('locationdel/{id}', ['as' => 'locadel', 'uses'=> 'LocationController@delLocation']);

//unit
Route::get('unit', ['as' =>'prouni','uses'=>'UnitController@unit']);
Route::get('unitadd', ['as' =>'unitad','uses'=>'UnitController@addUnit']);
Route::post('/unit/add',['as'=>'unitadd','uses'=>'UnitController@insertUnit']);
Route::get('unitdetail/{id}', ['as' =>'unitdet','uses'=>'UnitController@detailUnit']);
Route::get('unit/{id}', ['as'=>'unitdel','uses'=>'UnitController@delUnit']);
Route::get('unitupdate/{id}', ['as'=>'unitupdate','uses'=>'UnitController@upUnit']);
Route::post('unitupdate/{id}',['as'=>'update','uses'=>'UnitController@updateUnit']);

//stage
Route::get('stage',  ['as'=>'prosta', 'uses'=>'StageController@stage']);
Route::get('stageadd', ['as'=>'stagead','uses'=>'StageController@addStage']);
Route::post('/stage/add', ['as' => 'stageadd', 'uses' => 'StageController@insertStage']);
Route::get('stageupdate/{id}', ['as'=>'stageupde','uses'=>'StageController@upStage']);
Route::post('/stage/update/{id}',['as'=>'updateStage','uses'=>'StageController@updateStage']);
Route::get('stage/{id}',['as'=>'stagedel','uses'=>'StageController@delStage']);
Route::get('stagedetail', ['uses'=>'StageController@detailStage']);

//Project_Stage
Route::post('projectdetail/{id}', ['as'=>'projstageadd','uses'=>'ProjectController@addProjectStage']);
Route::get('projectstagedelete/{id}', ['as'=>'prostagedel', 'uses' => 'ProjectController@deleteProjectStage']);

//Project_Unit
Route::post('projectdetail/unit/{id}', ['as'=>'projunitadd','uses'=>'ProjectController@addProjectUnit']);
Route::get('projectunitdelete/{id}', ['as'=>'projunitdel', 'uses' => 'ProjectController@deleteProjectUnit']);