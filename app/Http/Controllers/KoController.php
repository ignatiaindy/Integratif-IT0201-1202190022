<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KoController extends Controller
{
    public function index()
    {
        $index = DB::table('news')->select('id','title','img_url','description','rss_id','source_url')-> where ('rss_id','2')-> limit (10)->orderBy('id', 'DESC')->get();
        return view('korea', ['index'=>$index]);
    }
}