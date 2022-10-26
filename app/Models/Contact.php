<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Contact extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $table = 'contact';

    protected $fillable = [
        'title',
        'username',
        'password',
        'content',
        'image_name', 
        'image_path'
    ];


}