<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    use HasFactory;
    protected $fillable = ['code','start_time','end_time'];

    public function semesters(){
        return $this->hasMany(Semester::class);
    }

    public function activities(){
        return $this->hasMany(Activity::class);
    }
    
}
