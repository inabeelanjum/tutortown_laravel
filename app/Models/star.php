<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class star extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',"tutor_id",'star'
    ];
}
