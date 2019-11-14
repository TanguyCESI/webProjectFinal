<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'description', 'price', 'user_id', 'image_id'
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,"have");
    }
    public function contained()
    {
        return $this->hasMany(Contain::class);
    }
}
