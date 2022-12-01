<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff()
    {
        return view ('staff');
    }

    public function detailStaff()
    {
        return view ('staffdetail');
    }

    public function addStaff()
    {
        return view ('staffadd');
    }
    
}
