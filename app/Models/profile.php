<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','about','image','charges',
       'location',
       'phone',
       'subj1','subj2','subj3','subj4','subj5','subj6', 
    ];
        
}
