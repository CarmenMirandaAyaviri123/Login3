<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acontecimiento extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function reserva(){
        return $this->belongsTo(reserva::class);
    }
}
