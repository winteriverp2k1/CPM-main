<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Stage;

class StageController extends Controller
{
    public function stage()
    {
        $stage = Stage::all();
        return view ('stage', compact('stage'));
    }

    public function addStage()
    {
        return view ('stageadd');
    }

    public function insertStage(Request $request)
    {
        $this->validate(request(),['stagename'=>'required']);
        $filename ="";
        $product=Stage::create([
            'name'=>$request->stagename,
            'is_enabled'=> $request->is_enabled
        ]);
        $stage=Stage::all();
        return view('stage',compact('stage'));
    }


    public function detailStage()
    {
        return view ('stagedetail');
    }

    public function delStage($id)
    {
        $record = Stage::where("id",$id)->first();
        Stage::where("id",$id)->delete();
        $stage = Stage::paginate(20);
        return view('stage',compact('stage'));
    }

    public function upStage($id)
    {
        $stage = Stage::findOrFail($id);
        return view ('stageupdate',compact('stage'));
    }

    public function updateStage(Request $request, $id)
    {
        $request->validate([
            'stagename'=>'required',
            'is_enabled'=>'required'
        ]);
        $stage = Stage::findOrFail($id);
        $stage->name = $request->get('stagename');
        $stage->is_enabled = $request->get('is_enabled');
        $stage->save();

        return redirect('/stage');
    }

    
}
