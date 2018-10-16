<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerImage extends Model
{
    protected $table = 'partner_images';
    protected $fillable = [
        'id',
        'partner_image'
    ];
    
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->partner_image))
        {
            $directory = config('cms.image.partner');
            $imagePath = public_path() . "/{$directory}/" . $this->partner_image;
            if (file_exists($imagePath)) $imageUrl = asset("/public/{$directory}/" . $this->partner_image);
        }

        return $imageUrl;
    }

    
}
