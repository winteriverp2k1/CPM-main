<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Project_Unit extends Pivot
{
    public $incrementing = true;
    protected $table = "Project_Unit";
    public $timestamps = false;
    protected $fillable = ['id_project', 'id_unit'];
}
