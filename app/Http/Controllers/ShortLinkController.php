<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use AshAllenDesign\ShortURL\Facades\ShortURL; 

class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortLinks = ShortLink::latest()->get();

        return view('shortenLink', compact('shortLinks'));
    }
 
    public function store(Request $request)
    {
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder(); 
        $shortURLObject = $builder->destinationUrl($request->origin_url)->make();
        $shortURL = $shortURLObject->default_short_url;

        return view ('admin/schedule/index',compact('shortURL'));
    }


}
