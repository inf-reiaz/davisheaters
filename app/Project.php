<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
        protected $fillable = [
        'id',
        'user_id',
        'project_name',
        'owner_name',
        'date_of_completion',
        'body',
        'photo'
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
            $directory = config('cms.image.project');
            $imagePath = public_path() . "/{$directory}/" . $this->photo;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->photo);
        }

        return $imageUrl;
    }
    
}
