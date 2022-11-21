<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;

    protected $table = 'announcements';
    protected $id = 'announceID';


    protected $fillable = [
        'announceID',
        'description',
        'card',
        'subtext',
        'activated'
    ];
}
