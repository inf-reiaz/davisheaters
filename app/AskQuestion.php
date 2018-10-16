<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AskQuestion extends Model
{
    protected $table = 'ask_questions';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'question'
    ];
    
    
}
