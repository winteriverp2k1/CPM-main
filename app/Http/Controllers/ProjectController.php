<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Project;
use App\Models\Project_Stage;
use App\Models\Project_Unit;
use App\Models\Stage;
use App\Models\Unit;
use GuzzleHttp\Handler\Proxy;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Http\Request;
use Locale;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function home()
    {
        $project = Project::paginate(20);
        return view('projecthome', compact('project'));
    }
    public function getProjectDetail($id)
    {
        $stage = Project_Stage::where("id_project", $id);
        $unit = Project_Unit::where("id_project", $id);
        $project = Project::where("id", $id)->first();
        return view("projectdetail", compact('project', 'stage', 'unit'));
    }
    public function addProject()
    {
        $location = Location::all();
        $unit = Unit::all();
        $stage = Stage::all();
        return view('projectadd', compact('location', 'unit', 'stage'));
    }
    public function insertProject(Request $request)
    {
        //tạo project trước
        $this->validate(request(), ['name' => 'required']);
        $filename = "";

        if ($request->file('fileUpload')->isValid()) {
            $filename = $request->fileUpload->getClientOriginalName();
            $request->fileUpload->move('images/', $filename);
        }
        $project = Project::create([
            'id_location' => $request->locations,
            'name' => $request->name,
            'budget' => $request->budget,
            'description' => $request->description,
            'end_date' => $request->end_date,
            'started_date' => $request->started_date,
            'status' => $request->status,
            'size' => $request->size,
            'profit' => $request->profit,
            'img' => $filename
        ]);
        $project = Project::paginate(20);
        $location = Location::all();
        return view('projectlist', compact('project', 'location'));
    }
    public function listProject()
    {
        $location = Location::all();
        $project = Project::paginate(20);
        return view('projectlist', compact('project', 'location'));
    }
    public function editProject($id)
    {
        $location = Location::all();
        $project = Project::findOrFail($id);
        return view('projectedit', compact('project', 'location'));
    }
    public function updateProject(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'size' => 'required',
        //     'id_location' => 'required',
        //     'budget' => 'required',
        //     'description' => 'required',
        //     'end_date' => 'required',
        //     'started_date' => 'required',
        //     'status' => 'required',
        //     'profit' => 'required',
        //     'img' => 'required',
        // ]);
        $filename = "";

        if ($request->file('fileUpload')->isValid()) {
            $filename = $request->fileUpload->getClientOriginalName();
            $request->fileUpload->move('images/', $filename);
        }
        $project = Project::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'size' => $request->input('size'),
                'id_location' => $request->input('locations'),
                'budget' => $request->input('budget'),
                'description' => $request->input('description'),
                'end_date' =>  $request->input('end_date'),
                'started_date' => $request->input('started_date'),
                'status' => $request->input('status'),
                'profit' => $request->input('profit'),
                'img' => $filename,
            ]);


        $location = Location::all();
        $project = Project::paginate(20);
        return view('projectlist', compact('project', 'location'));
    }
    public function delProject($id)
    {
        $record = Project::where("id", $id)->first();
        if (file_exists(public_path("images/".$record->img))) {
            unlink(public_path("images/".$record->img));
        }
        Project::where("id", $id)->delete();
        $location = Location::all();
        $project = Project::paginate(20);
        return view('projectlist', compact('project', 'location'));
    }
    public function detailProject()
    {
        return view('projectdetail');
    }
    //many to many table ProjectStage
    public function addProjectStage($id)
    {
        //lấy project từ id
        $project = Project::where("id", $id)->first();
        // //lấy toàn bộ stage
        // $stage = Stage::all();
        // //tạo project_stage
        // foreach(Stage::all() as $value)
        // {
        //     $project_stage = Project_Stage::created([
        //         'id_project'=>$project->id,
        //         'id_stage'=> $value->id ,
        //         'status'=>'true'
        //     ]);
        // }
        // return view('projectlist', compact('project','location'));
        $total = DB::table('stage')->get();
        foreach ($total as $value) {
            DB::table('project_stage')->updateOrInsert(
                ['id_stage' => $value, 'id_project' => $project->id]
            );
        }
    }
    public function getProjectStage($id)
    {
        $stage = Project_Stage::where("id_project", $id);
        return view('', compact('stage'));
    }
    public function editProject_Stage($id)
    {
        $stage = Stage::all();
        $project = Project::where("id", $id)->first();
        return view('projectedit', compact('project', 'stage'));
    }
    public function updateProject_Stage($id)
    {
        $project = Project::where("id", $id)->first();
        return view('projectlist', compact('project'));
    }
    public function deleteProjectStage($id_project, $id_stage)
    {
        /*$project_stage = Project_Stage::where("id_project", $id_project)->first();
        Project::where("id", $id)->delete();
        $project = Project::paginate(20);
        return view('projectlist', compact('project'));*/
    }
    //many to many table ProjectUnit
    public function addProjectUnit($id)
    {
        //lấy project từ id
        $project = Project::where("id", $id)->first();
        //tạo project_unit
        $project_unit = Project_Unit::created([
            'id_project' => $project->id,
            'id_unit' => null
        ]);
    }
    public function getProjectUnit($id)
    {
        $unit = Project_Unit::where("id_project", $id);
        return view('', compact('unit'));
    }
    public function updateProjectUnit()
    {
    }
    public function deleteProjectUnit()
    {
    }
}
