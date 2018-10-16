<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        protected $fillable = [
        'id',
        'name',
        'body',
        'photo',
    ];
    
        
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    
        
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->photo))
        {
            $directory = config('cms.image.ctg');
            $imagePath = public_path() . "/{$directory}/" . $this->photo;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->photo);
        }

        return $imageUrl;
    }
    
}
