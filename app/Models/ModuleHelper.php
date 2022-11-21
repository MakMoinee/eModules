<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleHelper extends Model
{
    protected $fillable = [
        'trackID',
        'isAvailable',
    ];
}
