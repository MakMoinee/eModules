<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicTrack extends Model
{
    use HasFactory;

    protected $table = 'academic_tracks';
    protected $id = 'trackID';


    protected $fillable = [
        'trackID',
        'strandID',
        'sequence',
        'description',
        'hours',
        'prerequisite',
        "status",
        "category",
    ];
}
