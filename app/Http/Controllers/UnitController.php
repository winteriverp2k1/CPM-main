<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Unit;

class UnitController extends Controller
{
    public function unit()
    {
        $unit = Unit::paginate(20);//lấy 20 record từ bảng unit
        return view ('unit', compact('unit'));
    }
    public function addUnit()
    {
        return view ('unitadd');
    }
    public function insertUnit(Request $request)
    {
        $this->validate(request(),['unitname' => 'required']);
        $filename = "";
        $createunit = Unit::create([
            'name'=>$request->unitname,
            'created_date'=> $request->created_date
        ]);
        $unit = Unit::paginate(20);
        return view('unit',compact('unit'));
    }
    public function delUnit($id)
    {
        Unit::where("id",$id)->delete();
        $unit = Unit::paginate(20);
        return view('unit',compact('unit'));
    }
    public function detailUnit($id)
    {
        return view ('unitdetail');
    }
    public function upUnit($id)
    {
        $unit = Unit::findOrFail($id);
        return view ('unitupdate',compact('unit'));
    }

    public function updateUnit(Request $request, $id)
    {
        $request->validate(['unitname'=>'required', 'created_date'=>'required']);
        $unit = Unit::findOrFail($id);
        $unit->name = $request->get('unitname');
        $unit->created_date = $request->get('created_date');
        $unit->save();
        return redirect('/unit');
    }
}
