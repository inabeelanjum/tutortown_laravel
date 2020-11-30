<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userrequest extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_req',
        'reply',
        'user_id',
    ];
    public function userrequest()
    {
        return $this->hasOne('app\Models\notification');
    }
}
