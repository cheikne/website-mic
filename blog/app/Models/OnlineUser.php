<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineUser extends Model
{
        protected $fillable = [
        'name',
        'email',
        'password',
        'profil',
        'institut',
    ];
    use HasFactory;
}
