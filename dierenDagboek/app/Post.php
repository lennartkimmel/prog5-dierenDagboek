<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags() {
        return $this->belongsTo('App\Tags');
    }

    protected $fillable = [
        'caption',
        'image',
        'tags_id',
        'created_by',
        'text'
    ];

    public function liked() 
    {
       return $this->belongsToMany(User::class); 
    }
}    
