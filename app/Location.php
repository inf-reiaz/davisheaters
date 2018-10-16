<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'company_name',
        'p_o',
        'address',
        'info',
        'phone',
        'button1',
        'button1_link',
        'button2',
        'button2_link',
        'button3',
        'button3_link'
    ];
    
        
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
}
