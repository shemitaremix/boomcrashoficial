<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * conectar uno a muchos
     * 
     * @return belongsTo
     *
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * conectar uno a muchos
     * 
     * @return belogsTo
     *
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * conectar muchos a muchos
     * 
     * @return belongsToMany
     *
     */
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

   
}
