<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_address',
        'smtp_server',
        'smtp_port',
        'smtp_username',
        'smtp_password',
    ];
}

