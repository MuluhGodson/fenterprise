<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDivision extends Model
{
    use HasFactory;

    protected $table = "sub_divisions";

    public function division()
    {
       return $this->belongsTo(Division::class, 'division_id');
    }
    
}
