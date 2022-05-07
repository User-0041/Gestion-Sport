<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlet extends Model
{
    use HasFactory;
    public function categorie()
    {
        return $this->hasMany(Categorie::class);
    }

    public function athletes(){
        return$this->hasManyThrough(Athlete::class,Categorie::class);}

        public function comantable(){return$this->morphMany(comantable::class, 'comantable');}
}
