<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShortLink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function __construct()
    { 
        $this->path = 'admin/schedule';
        $this->route_name = "schedule"; 
    }

    public function index(Request $request)
    {
        $link = ShortLink::get(); 
        return view($this->path . '.index',compact('link'));
    }

    public function store(Request $request)
    {

    }

  

    public function destroy()
    {
    }
}
