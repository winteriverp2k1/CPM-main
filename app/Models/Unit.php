<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $table = "Unit";
    public $timestamps = false;
    protected $fillable = ['id', 'name','created_date'];
    public function User()
    {
        return $this->hasOne(User::class, 'id_unit', 'id');
    }
    public function Projects() 
    {
        return $this->belongsToMany(Project::class)->using(Project_Unit::class);
    }
}
