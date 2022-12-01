<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = "Location";
    public $timestamps = false;
    protected $fillable = ['detail', 'name'];
    public function Projects($value='')
    {
        return $this->hasMany(Project::class,"id_location",'id');
    }
}
