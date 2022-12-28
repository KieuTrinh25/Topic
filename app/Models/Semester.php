<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Semester extends Model
{
    use HasFactory;
    protected $fillable = ['code','name','slug', 'status', 'start_time', 'end_time', 'school_year_id'];

    public function schoolYear(){
        return $this->belongsTo(SchoolYear::class);
    }
    public static function booted(){
        static::created(function ($semester){
            $semester->slug = Str::slug($semester->name);
            $semester->save();
        });
        
    }
}
