<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubImage extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'sub_image'];
}
