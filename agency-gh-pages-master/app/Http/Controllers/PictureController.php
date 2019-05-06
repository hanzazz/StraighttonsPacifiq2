<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Picture;
use File;
use DB;

class PictureController extends Controller
{
    function index()
    {
    	return view('form-album');
    }

     function upload(Request $req){ 	
        $this->validate($req,[
            'picture_up' => 'required',
             'picture_up.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
     	$num = 0;
        $img = $req->file('picture_up');
     	if($img){
     		foreach ($img as $pic) {
     			$newname = time().$num.'.'.$pic->getClientOriginalExtension();
     			$pic->move('album',$newname);
                $picture = new Picture([
                	'path'=> 'album/'.$newname,
                	'gallery_id'=>$req->input('gallery_id')
                ]);
                $picture->save();
     		$num++;
     		}
     	}
    	
    	return back();
    }

    function delete($id){
        $picture = DB::table('picture')->where('id',$id)->first();

    	$image_path =$picture->path;
    	$con = "Error can't Delete file!!";
    	if(File::exists($image_path)) {
    		if(File::delete($image_path)){
    			DB::table('picture')->where('id',$id)->delete();
    		}
    	}
		return back();
    }
}
