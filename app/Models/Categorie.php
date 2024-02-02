<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->hasMany(Books::class, 'categorie_id', 'id');
    }

}
