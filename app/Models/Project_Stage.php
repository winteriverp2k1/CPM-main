<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Project_Stage extends Pivot
{
    public $incrementing = true;
    protected $table = "Project_Stage";
    public $timestamp = false;
    protected $fillable = ['id_project', 'id_stage', 'status'];
}