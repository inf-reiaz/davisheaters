<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'photo',
        'headline',
        'paragraph',
        'button',
        'link'
    ];
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->photo))
        {
            $directory = config('cms.image.directory');
            $imagePath = public_path() . "/{$directory}/" . $this->photo;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->photo);
        }

        return $imageUrl;
    }

    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->photo))
        {
            $directory = config('cms.image.directory');
            $ext       = substr(strrchr($this->photo, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->photo);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $thumbnail);
        }

        return $imageUrl;
    }
    
}
