<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
		{
		return view("melk");
		}
	//***************_FUN_STORE_********************* */
	public function store(Request $request)
   {
    Data::create($request->all());
    return redirect()->route('melk')->with('success','با موفقیت ذخیره شد!');
   }
	
	 //***************_FUN_SHOW_********************* */
	 public function show(){
      $data = DB::table('data')->get();

      $saved_ids = [];
      if (Auth::check()) {
          $saved_ids = DB::table('select')
              ->where('user_id', Auth::id())
              ->pluck('data_id') // فقط ستون data_id رو بگیر
              ->toArray();
      }

      session(['data' => $data]);
      // var_dump($data);
      // dd();
      $price1 = DB::table('data')
          ->orderBy('price', 'desc')
          ->limit(10)
          ->get()
          ->toJson();
      session(['price1' => $price1]);
      
      $price2 = DB::table('data')
          ->orderBy('price', 'asc')
          ->limit(10)
          ->get()
          ->toJson();
      
   /* ====================== SESSIONS ===========================*/
      session(['price2' => $price2]);
         // echo($price1);
         // dd();
            session(['url.intended.melk' => route('melk')]);
            //dd(session('url.intended.melk'));

            
            if (!auth::check()) {
               // ذخیره URL مقصد
               //وقتی کاربر لاگین نیست این سشن ذخیره میشه
               session(['url.intended' => route('melk.show')]);   
            }
     /* ====================== RUTURN ===========================*/
      return view('show',compact('data','price1','price2','saved_ids'));
   }
	

}//End_Class
