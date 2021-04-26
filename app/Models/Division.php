<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = "divisions";

    public function region()
    {
       return $this->belongsTo(Region::class, 'region_id');
    }
    
    public function subdivisions()
    {
       return $this->hasMany(SubDivision::class, 'subdivision_id');
    }
}
