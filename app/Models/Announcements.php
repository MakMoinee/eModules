<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Announcements extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'announcements'; 
    protected $id = 'announceID';
    protected $primaryKey = 'announceID';


    protected $fillable = [
        'announceID',
        'description',
        'card',
        'subtext',
        'activated'
    ];
}
