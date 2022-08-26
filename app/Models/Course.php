<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'starting_date',
        'ending_date',
        'fee',
        'image',
        'short_description',
        'long_description',
        'status',
    ];

    protected static $course;
    public static function saveCourseData($request, $id=null)
    {
       self::$course = Course::updateOrCreate(['id'=>$id],[
            'title'             =>$request->title,
            'starting_date'     =>$request->starting_date,
            'ending_date'       =>$request->ending_date,
            'fee'               =>$request->fee,
            'image'             =>Helper::uploadImage($request->file('image'), 'admin/assets/img/course-images/',isset($id) ? Course::find($id)->image : null),
            'short_description' =>$request->short_description,
            'long_description'  =>$request->long_description,
            'status'            =>$request->status,
        ]);
       if ($request->hasFile('sub_images'))
       {
           foreach ($request->file('sub_images') as $image)
           {
               CourseSubImage::create([
                   'course_id'  =>self::$course->id,
                   'sub_image'  =>Helper::uploadImage($image, 'admin/assets/img/course-sub_images/'),
               ]);
           }
       }
    }
    public function subImages()
    {
        return $this->hasMany(CourseSubImage::class);
    }
}
