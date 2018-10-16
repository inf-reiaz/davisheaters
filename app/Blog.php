<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Carbon\Carbon;

class Blog extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'body',
        'meta_tages',
        'photo',
        'homepage',
        'view_count',
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
            $directory = config('cms.image.blogs');
            $imagePath = public_path() . "/{$directory}/" . $this->photo;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->photo);
        }

        return $imageUrl;
    }


    public function getDateAttribute($value)
    {
        return is_null($this->created_at) ? '' : $this->created_at->diffForHumans();
    }
    
    public function getBodyHtmlAttribute($value)
    {
        return $this->body ? Markdown::convertToHtml(e($this->body)) : NULL;
    }

    
    public function scopePopular($query)
    {
        return $query->orderBy('view_count', 'desc');
    }
    
    public function scopeOld($query)
    {
        return $query->orderBy('view_count', 'ASC ');
    }
}
