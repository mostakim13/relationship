<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "students";
    public function details()
    {
        return $this->hasOne(Detail::class, 'student_id');
        // OR return $this->hasOne('App\Phone');
    }
}
