<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    // relacion de muchos a muchos ( belongsToMany  )
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion Polimorfica con la tabla Imageable
    //morphOne pasa dos parametros 1) El modelo Image. 2)El nombre de la funcion de Tag

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
