<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = ['code','name','slug'];

    public function klass(){
        return $this->hasMany(Klass::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
    public static function booted(){
        static::created(function ($faculty){
            $faculty->slug = Str::slug($faculty->name) ;
            $faculty->save();
        });
        
    }
}
