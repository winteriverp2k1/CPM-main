<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\Project;
use App\Models\Project_Stage;
use App\Models\Project_Unit;
use App\Models\Stage;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MainController extends Controller
{
    public function home()
    {
    
        $project = Project::all();
        $location = Location::all();
        $stage = Stage::all();
        $unit = Unit::all();
        $project_count = count($project);
        $location_count = count($location);
        $stage_count = count($stage);
        $unit_count = count($unit);
        $p_finish = Project::where('status', '1')->get();
        $p_count = count($p_finish);
      
        return view('mainpage', compact('project_count', 'location_count',
        'stage_count','unit_count','p_count'));

        // $project = Project::paginate(20);
        // return view('projecthome', compact('project'));
    }
    public function search(Request $request){
        $record = $request->input('search');
        $value = Project::where('name','LIKE','%' . $record . '%')->get();
        $location = Location::all();    
        return view('search', compact('value', 'location'));
    }



 
}
