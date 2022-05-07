<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;


    public function SportsEvent(){
        return$this->belongsTo(SportsEvent::class);
    }


    public function Athlets()
    {
        return $this->hasMany(Athlet::class);
    }
}
