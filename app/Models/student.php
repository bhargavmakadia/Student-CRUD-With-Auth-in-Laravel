<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_name',
        'student_gender',
        'student_mobile',
        'student_email',
        'student_photo',
        'student_address',
        'student_language'
    ];
}
