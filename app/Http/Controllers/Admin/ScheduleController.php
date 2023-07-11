<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use AshAllenDesign\ShortURL\Facades\ShortURL; 

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
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

        $shortURLObject = $builder->destinationUrl($request->origrin_url)->make();
        $shortURL = $shortURLObject->default_short_url;
        return view($this->path . '.index');
    }

    public function store(Request $request)
    {

    }

  

    public function destroy()
    {
    }
}
