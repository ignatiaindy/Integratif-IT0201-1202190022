<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UnController extends Controller
{
    public function index()
    {
        $index = DB::table('news')->select('id','title','img_url','description','rss_id','source_url')-> where ('rss_id','3')-> limit (10)->orderBy('id', 'DESC')->get();
        return view('united', ['index'=>$index]);
    }
}