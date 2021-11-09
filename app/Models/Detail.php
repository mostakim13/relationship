<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Detail extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "details";
    public function students()
    {
        return $this->belongsTo(Student::class);
        // OR return $this->hasOne('App\Phone');
    }
}
