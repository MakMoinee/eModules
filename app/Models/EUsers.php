<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EUsers extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'e_users';
    protected $id = 'userID';


    protected $fillable = [
        'userID',
        'username',
        'password',
        'userType',
        "firstname",
        "middlename",
        "lastname",
        "lrn",
        "track",
        "email",
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    // '', '', '', '', '', '
}
