<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EUsers extends Model
{
    use HasFactory;

    protected $table = 'e_users';
    protected $id = 'userID';


    protected $fillable = [
        'userID',
        'username',
        'password',
        'userType',
        "firstname",
        "middlename" ,
        "lastname",
        "lrn",
        "track" ,
        "email" ,
    ];
}
