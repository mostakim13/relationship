<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function detail()
    {
        return $this->hasOne(Detail::class);
        // OR return $this->hasOne('App\Phone');
    }
}
