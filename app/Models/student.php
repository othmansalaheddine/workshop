<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'name','course_id','phone_id',
    ];

    public function courses() {
        return $this->belongsToMany(Course::class);
    }
    public function phone() {
        return $this->hasOne(Phone::class);
    }
}
