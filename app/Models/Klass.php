<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Klass extends Model
{
    use HasFactory;
    protected $fillable = ['code','name','slug', 'faculty_id'  ];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
    public static function booted(){
        static::created(function ($klass){
            $klass->slug = Str::slug($klass->name);
            $klass->save();
        });
        
    }
}
