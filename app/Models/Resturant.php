<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function typologies(){
        return $this->belongsToMany(Typology::class);
    }

    public function dishes(){
        return $this->hasMany(Dish::class);
    }
}
