<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['code','name', 'day_of_birth', 'sex','phone', 'email', 'address', 'faculty_id', 'klass_id'];
    
    public function activities(){
        return $this->belongsToMany(Activity::class);
    }

    public function klass(){
        return $this->belongsTo(Klass::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

}
