<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    protected $table = 'abouts'; 
    protected $fillable = [
        'image',
            'name',
            'content',
    ];
}
