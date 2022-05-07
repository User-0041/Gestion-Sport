<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportsEvent extends Model
{
    use HasFactory;

        public function Manger(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        public function comantable(){
            return$this->morphMany(comantable::class,'comantable');
        }
}

