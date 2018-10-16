<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    protected $table = 'aboutuses';
    protected $fillable = [
        'id',
        'user_id',
        'photo',
        'body'
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
            $directory = config('cms.image.aboutus');
            $imagePath = public_path() . "/{$directory}/" . $this->photo;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->photo);
        }

        return $imageUrl;
    }
    
}
