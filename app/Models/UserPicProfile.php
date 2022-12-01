<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPicProfile extends Model
{
    use HasFactory;

    protected $table = 'user_pic_profiles';
    protected $id = 'picProfileID';


    protected $fillable = [
        'userID',
        'filePath'
    ];
}
