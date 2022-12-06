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

class ProjectController extends Controller
{
    public function home()
    {
        $project = Project::paginate(20);
        return view('projecthome', compact('project'));
    }
    public function project()
    {
        $project = Project::paginate(20);
        return view('projectlist', compact('project'));
    }
    public function getProjectDetail($id)
    {
        $record = Project::where("id", $id)->first();
        $stage = Stage::all();
        $unit = Unit::all();
        $stage_pj = (array)Project_Stage::where("id_project", $record->id)->get();
        $unit_pj = (array)Project_Unit::where("id_project", $record->id)->get();
        $project = Project::where("id", $id)->first();
        return view("projectdetail", compact('project', 'stage', 'unit', 'stage_pj', 'unit_pj'));
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
        if ($record->Stages()->exists()|| $record->Units()->exists())
        {
            return abort('404','Khong the xoa');
        }
        else
        {
            if (file_exists(public_path("images/" . $record->img))) {
                unlink(public_path("images/" . $record->img));
            }
            Project::where("id", $id)->delete();
            $location = Location::all();
            $project = Project::paginate(20);
            return view('projectlist', compact('project', 'location'));
        }
        
    }
    public function detailProject()
    {
        return view('projectdetail');
    }
    //many to many table ProjectStage
    public function addProjectStage(Request $request, $id)
    {
        $project = Project::where("id", $id)->first();
        $project_stage = Project_Stage::create([
            'id_project' => $project->getkey('id'),
            'id_stage' => $request->stage_id,
            'status' => $request->status,
        ]);
        $stage = Stage::all();
        $unit = Unit::all();
        $stage_pj = Project_Stage::where("id_project", $id);
        $unit_pj = Project_Unit::where("id_project", $id);
        $project = Project::where("id", $id)->first();
        return view("projectdetail", compact('project', 'stage', 'unit', 'stage_pj', 'unit_pj'));
    }
    public function deleteProjectStage($id_project, $id_stage)
    {
        $project_stage = Project_Stage::where("id_project", $id_project)->where("id_stage",$id_stage)->delete();
        $project = Project::paginate(20);
        return view('projectlist', compact('project'));
    }
    //many to many table ProjectUnit
    public function addProjectUnit(Request $request,$id)
    {
        $project = Project::where("id", $id)->first();
        $project_unit = Project_Unit::create([
            'id_project' => $project->getkey('id'),
            'id_unit' => $request->unit_id,
        ]);
        $stage = Stage::all();
        $unit = Unit::all();
        $stage_pj = Project_Stage::where("id_project", $id);
        $unit_pj = Project_Unit::where("id_project", $id);
        $project = Project::where("id", $id)->first();
        return view("projectdetail", compact('project', 'stage', 'unit', 'stage_pj', 'unit_pj'));
    }
    public function deleteProjectUnit($id_project, $id_unit)
    {
        $project_unit = Project_Unit::where("id_project", $id_project)->where("id_unit",$id_unit)->delete();
        $project = Project::paginate(20);
        return view('projectlist', compact('project'));
    }
}
