<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class DeviceKey extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $table = 'device_keys';
    protected $id = 'id';


    protected $fillable = [
        'id',
        'device_key',
    ];
}
