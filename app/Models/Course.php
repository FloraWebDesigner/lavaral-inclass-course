<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;
    use softDeletes;

    protected $dates = ['deleted_at'];
    // we can edit
    protected $fillable = [
        'code',
        'name',
        'description',
        'tutor'
    ];
}
