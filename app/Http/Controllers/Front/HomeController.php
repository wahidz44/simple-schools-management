<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $existEnroll;
    private $hasEnroll = false;

    public function home()
    {
        return view('front.home.home',[
            'courses'=>Course::latest()->get(),
        ]);
    }

    public function courseDetails ($id)
    {
        $this->existEnroll = Enroll::where('course_id', $id)->where('user_id', auth()->id())->first();
        if (isset($this->existEnroll))
        {
            $this->hasEnroll = true;
        }

        return view('front.course.details', [
            'course'    => Course::find($id),
            'hasEnroll' => $this->hasEnroll,
        ]);
    }
}
