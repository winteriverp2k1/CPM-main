<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;
class LocationController extends Controller
{
    public function location()
    {
        $location = Location::all();
        return view ('location', compact('location'));
    }

    public function addLocation(Request $request)
    {

        return view ('locationadd');
    }

    public function insertLocation(Request $request)
    {
        $this->validate(request(),['locaname' =>'required']);
        $this->validate(request(),['locadetail' =>'required']);
        $locaadd=Location::create([
            'name'=>$request->locaname,
            'detail'=>$request->locadetail,
        ]);
        $location= Location::paginate(15);
        return view ("location", compact('location'));
    }
    public function detailLocation($id)
    {
        $loca = Location::where("Id",$id)->first();
        return view ('locationdetail', ['loca'=>$loca]);
    }
}
