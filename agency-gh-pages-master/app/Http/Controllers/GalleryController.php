<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Gallery ;
use App\Picture ;
use DB;

class GalleryController extends Controller
{
    public function  index() {
        $gallery = Gallery::all();
        return view ('Album.show-album', ['gallery' => $gallery]);
        
    }

    function insert(Request $req){
        $this->validate($req, [
           'title'   => 'required|max:255',
           'content' => 'required',
           //'picture_up' => 'required',
        ]);        
        $path='';
        if($req->file('picture')){
    		$newname = time().'.'.$req->file('picture')->getClientOriginalExtension();
    		$req->file('picture')->move('imgOfalbum',$newname);
            $path = 'imgOfalbum/'.$newname;
        }
        
        
        $gal = new Gallery([
                    'img' => $path ,
                    'title'=>$req->input('title'),
                    'content'=>$req->input('content'),
                    'link'=>$req->input('link')
                ]);
                $gal->save();
                return redirect('/show-album');
         // $gallery = Gallery::all();
        // return view ('Album.show-album', ['gallery' => $gallery]);
    }

    function  create()
	{    
		return  view('Album.form-album');
    }
    
    function   edit_album_detail($id) {
            $gallery = Gallery::find($id);
        
            return view('Album.edit-album-detail',['gallery' => $gallery]);
    }

    function edit($id){
        $picture = Picture::where('gallery_id',$id)->get();

        //dd($picture);
        return view('Album.edit-album',['picture' => $picture, 'id'=> $id]);
    }

    function delete($id){
        DB::table('gallery')->where('id',$id)->delete();
        return back();
    }

    function update(Request $req,$id){
        //dd( $req);
        $this->validate($req, [
           'title'   => 'required|max:255',
           'content' => 'required',
           'link' => 'required',
        ]);  
        DB::table('gallery')->where('id',$id)->update([
                    'title'=> $req->input('title'),
                    'content'=>$req->input('content'),
                    'link'=>$req->input('link')
                ]);
        return back();
    }

}
