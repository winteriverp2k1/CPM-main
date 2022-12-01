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

Route::get('/', function () {
    return view('trangchu');
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
// Route::get('stage/{id}',['as'=>'stagedel','uses'=>'StageController@delStage']);
//staff
Route::get('staff',  ['uses'=>'StaffController@staff']);
Route::get('staffadd', ['uses'=>'StaffController@addStaff']);
Route::get('staffdetail', ['uses'=>'StaffController@detailStaff']);
//location
Route::get('location',  ['uses'=>'LocationController@location']);
Route::get('locationadd', ['as' =>'locaadd','uses'=>'LocationController@addLocation']);
Route::post('/location/add', ['as'=>'locaadd', 'uses'=>'LocationController@insertLocation']);
Route::get('locationdetail/{id}', ['as' =>'locadetail','uses'=>'LocationController@detailLocation']);
//unit

Route::get('unit', ['as' =>'unit','uses'=>'UnitController@unit']);

Route::get('unitadd', ['as' =>'unitadd','uses'=>'UnitController@addUnit']);
Route::post('/unit/add',['as'=>'unitadd','uses'=>'UnitController@insertUnit']);

Route::get('unit/{id}', ['as'=>'unitdel','uses'=>'UnitController@delUnit']);

Route::get('unitupdate/{id}', ['as'=>'unitupdate','uses'=>'UnitController@upUnit']);
Route::post('unitupdate/{id}',['as'=>'update','uses'=>'UnitController@updateUnit']);



//stage
Route::get('stage',  ['as'=>'stage', 'uses'=>'StageController@stage']);
Route::get('stageadd', ['as'=>'stageadd','uses'=>'StageController@addStage']);
//Route::post('',['as'=>'insertStage','uses'=>'StageController@insertStage']);
Route::post('/stage/add', ['as' => 'stageadd', 'uses' => 'StageController@insertStage']);

Route::get('stageupdate/{id}', ['as'=>'stageupdate','uses'=>'StageController@upStage']);
Route::post('/stage/update/{id}',['as'=>'updateStage','uses'=>'StageController@updateStage']);
//Route::post('stageupdate/{id}',['as'=>'updateStage','uses'=>'StageController@updateStage']);

Route::get('stagedetail', ['uses'=>'StageController@detailStage']);
Route::get('stage/{id}',['as'=>'stagedel','uses'=>'StageController@delStage']);
