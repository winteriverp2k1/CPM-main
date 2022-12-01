<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $table ="Stage";
    public $timestamps = false;
    protected $fillable = ['id','name','is_enabled'];
    public function Projects() 
    {
        return $this->belongsToMany(Project::class)->using(Project_Stage::class);
    }
}
