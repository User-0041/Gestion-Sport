<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlet extends Model
{
    use HasFactory;
    public function categorie()
    {
        return $this->belongsto(Categorie::class);
    }
}
