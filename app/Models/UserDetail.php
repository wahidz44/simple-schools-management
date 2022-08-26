<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'phone',
        'address',
        'image',
        'nid',
        'status',
    ];

    protected static $userDetail;

    public static function saveUserDetails($user)
    {
        return UserDetail::create([
            'user_id'=>$user->id,
        ]);
    }
}
