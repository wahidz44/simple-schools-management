<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Enroll;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    private $enrolls;

    public function enrollCourse (Request $request)
    {
        if (Auth::check())
        {
            if (Auth::user()->access_label == 0)
            {
                Enroll::createEnroll($request);
                return redirect()->back()->with('message', 'You enrolled this course successfully.');
            } else {
                return redirect()->back()->with('error', 'Only student can apply for this course.');
            }
        } else {
            return redirect('/login')->with('error', 'You must login first to enroll a course.');
        }
    }

    public function manage()
    {
        $this->enrolls = Enroll::latest()->get();
        return view('admin.enroll.manage', [
            'enrolls'   => $this->enrolls
        ]);
    }

    public function changeStatus($id)
    {
        $enroll = Enroll::find($id);
        if ($enroll->payment_status == 'pending')
        {
            $enroll->payment_status = 'complete';
        }elseif ($enroll->payment_status == 'complete')
        {
            $enroll->payment_status = 'pending';
        }
        $enroll->save();
        return back()->with('message','Payment status change successfully');
    }

}
