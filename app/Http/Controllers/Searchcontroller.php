<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\Buydata;
class Searchcontroller extends Controller
{
  // public function searchview(){
  //  $all_users = User::all();
  // return view('search',compact('all_users'));
  //
  // }

  public function searchview(){
    return view('searchview');
  }
  public function searchinsert(Request $request){
    $request->validate([
    'from'=>'required',
    'to'=>'required',
    'fare'=>'required',
    'departure_time'=>'required',
    ]);

    Search::insert([
    'from'=> $request->from,
    'to'=> $request->to,
    'fare'=> $request->fare,
    'departure_time'=> $request->departure_time,
  ]);
  return back()->with('status','Posted Successfully');
  }


  public function pagesearchview(){

     $all_searches = search::all();
    return view('search',compact('all_searches'));
  }

  public function editsearchview($search_id){
    // echo $search_id;
  $single_search_info =  Search::find($search_id);
    return view('searchlastpage',compact('single_search_info'));

  }
  public function buydatainsert(Request $request)
  {
      Buydata::insert([
    'name'=> $request->name,
    'phone_number'=> $request->phone_number,
	'email'=> $request->email,
    'journey_date'=> $request->journey_date,
    
  ]);
  return back()->with('status','Posted Successfully');
  }

}
