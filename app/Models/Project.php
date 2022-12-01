<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use InteractsWithMedia;
class Project extends Model
{
    use HasFactory;
    protected $table = "Project";
    public $timestamps = false;
    protected $fillable = ['budget', 'description', 'end_date', 'id_location', 'name', 'profit', 'size', 'started_date', 'status','img'];
    public function Location()
    {
        return $this ->belongsTo(Location::class,"id_location", "id");
    }
    public function Stages() 
    {
        return $this->belongsToMany(Stage::class)->using(Project_Stage::class);
    }
    public function Units() 
    {
        return $this->belongsToMany(Unit::class)->using(Project_Unit::class);
    }
}
