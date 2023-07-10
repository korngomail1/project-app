<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseTime;
use App\Models\CoachCourseTime;
use App\Models\Log;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

use Input;
use Carbon\Carbon;

use App\Models\Users;
use App\Models\Relationship;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function __construct()
    { 
        $this->path = 'admin/schedule';
        $this->route_name = "schedule"; 
    }

    public function index(Request $request)
    {
        return view($this->path . '.index');
    }

    public function store(Request $request)
    {

    }

  

    public function destroy()
    {
    }
}
