<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $fillable = [
        'id',
        'user_id',
        'body'
    ];
    
        
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    
}
