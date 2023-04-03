<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foul extends Model
{
    use HasFactory;
    protected $fillable = [
        'time', 'date','description','student_nis','teacher_nip',
    ];
}
