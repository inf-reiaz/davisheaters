<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_image',
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'role',
        'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function setPasswordAttribute($value)
    {
        
        $this->attributes['password'] = bcrypt($value);
        
    }

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }
    

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    
    public function aboutus()
    {
        return $this->hasMany(Aboutus::class);
    }
    
    public function partners()
    {
        return $this->hasMany(Partner::class);
    }
    
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    
    
    public function getDateAttribute($value)
    {
        return is_null($this->created_at) ? '' : $this->created_at->diffForHumans();
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
    
}
