<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['code','name','slug', 'content', 'status', 'school_year_id'];
    
    public function students(){
        return $this->belongsToMany(Student::class);
    }
    public function schoolYear(){
        return $this->belongsTo(SchoolYear::class);
    }
    public static function booted(){
        static::created(function ($activity){
            $activity->slug = Str::slug($activity->name) ;
            $activity->save();
        });
        
    }
}
