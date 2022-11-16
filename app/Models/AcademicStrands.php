<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicStrands extends Model
{
    use HasFactory;

    protected $table = 'academic_strands';
    protected $id = 'strandID';


    protected $fillable = [
        'strandID',
        'description',
    ];
}
