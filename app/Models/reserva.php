<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;

    public function acontecimiento(){
        return $this->hasOne(acontecimiento::class);
    }
}
