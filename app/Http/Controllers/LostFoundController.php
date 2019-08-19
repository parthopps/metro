<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lostfound;
use Carbon\Carbon;
use Image;
class LostFoundController extends Controller
{
    public function lostfoundview()
    {
    $lostfounds =  Lostfound::orderBy('id','desc')->get();
      return view('lostfound',compact('lostfounds'));

    }
    public function lostfoundinsert(Request $request){
      //print_r($_POST);
    //  echo $request->user_name;
    $request->validate([
    'user_name'=>'required',
    'description'=>'required',
    ]);

    $last_inserted_id = Lostfound::insertGetId([
      'user_name'=> $request->user_name,
      'description'=> $request->description,
      "created_at"=>Carbon::now(),

    ]);
    if($request->hasFile('product_image'))
    {
      $photo_to_upload = $request->product_image;
      $filename = $last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();
     Image::make($photo_to_upload)->resize(400, 300)->save(base_path('public/uploads/product_photos/'.$filename));
    //  print_r($filename);
    Lostfound::find($last_inserted_id)->update([

      'product_image' => $filename
    ]);

    }
    return back()->with('status','Posted Successfully');

    }
}
