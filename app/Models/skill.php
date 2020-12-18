<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id','subj1','subj2','subj3','subj4','subj5','subj6',

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
