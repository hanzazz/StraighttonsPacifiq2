<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery ;
use App\Article;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('album.form-album');
    }

    public function  show_all() {
        $gallery = Gallery::all();
        $picture=array();
        if(!empty($gallery)){
            foreach ($gallery as $item) {
                $picture[$item->id]=DB::table('picture')->where('gallery_id',$item->id)->get();
            }
        }
        $article = Article::all();
       
        return view ('index', ['gallery' => $gallery,'article' => $article,'picture'=>$picture]);
    }
}
