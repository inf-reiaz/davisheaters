<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'title',
        'body',
        'photo1',
        'photo2',
        'photo3',
        'homepage'
    ];
    
    
    public function cateory()
    {
        return $this->belongsTo(Category::class);
    }
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->photo1))
        {
            $directory = config('cms.image.products');
            $imagePath = public_path() . "/{$directory}/" . $this->photo1;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->photo1);
        }

        return $imageUrl;
    }
    
    public function getImageUrl2Attribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->photo2))
        {
            $directory = config('cms.image.products');
            $imagePath = public_path() . "/{$directory}/" . $this->photo2;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->photo2);
        }

        return $imageUrl;
    }
    
    public function getImageUrl3Attribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->photo3))
        {
            $directory = config('cms.image.products');
            $imagePath = public_path() . "/{$directory}/" . $this->photo3;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->photo3);
        }

        return $imageUrl;
    }
    
    
}
