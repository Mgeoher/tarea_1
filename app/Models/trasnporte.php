<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trasnporte extends Model
{
    use HasFactory;

    public function tranporte(){
        return $this->hasMany(camion::class,'codigo');
    }
}
