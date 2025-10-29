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
          $saved_ids = DB::table('selections')
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

//***************_FUN_AUTO.SELECT_********************* */
	 public function autoSelec(Request $req){
      $query = $req->input('query');
      $data = DB::select('SELECT DISTINCT address FROM `data` WHERE address LIKE ? LIMIT 5', [$query.'%']);
      $addresses = array_map(fn($r) => $r->address, $data); // fn is arrow function to give value of `address` key;
      $uniqueAddresses = array_values(array_unique($addresses)); 
      return response()->json($uniqueAddresses);
   }

//***************_FUN_SEARCH_********************* */	
	public function search(Request $request)
	{  
		$address = $request->input('val'); 
		$results = DB::table('data')
		->where('address', '=', $address)
		->get()
		->toJson();
		echo $results;   
	}

//***************_FUN_SELECT.TOGGEL_********************* */
	 public function toggle(Request $request){
      $user_id=Auth::id();
      $data_id = $request->data_id;
      
      
    $exists = DB::table('selections')
    ->where('user_id', $user_id)
    ->where('data_id', $data_id)
    ->first();

    if ($exists) {
      // اگر قبلاً ذخیره شده، حذف کن
      DB::table('selections')
          ->where('user_id', $user_id)
          ->where('data_id', $data_id)
          ->delete();
          return response()->json(['status' => 'removed']);
    }else{
       // اگر ذخیره نشده، اضافه کن
       DB::table('selections')->insert([
         'user_id' => $user_id,
         'data_id' => $data_id,
         'created_at' => now(),
         'updated_at' => now(),
     ]);
      return response()->json(['status' => 'added']);
    }
   }//fun_toggle();
//***************_FUN_MYFAV_********************* */
	public function myfav(){
      $user_id = Auth::id();
      $savedData = DB::table('data')
         ->join('selections', 'data.id', '=', 'selections.data_id')
         ->where('selections.user_id', $user_id)
         ->select('data.*') // فقط اطلاعات جدول data
         ->get();
       
      return view('myfav',compact('savedData'));
   }//fun_myfav()

//***************_FUN_REMOVE_********************* */
	 
	public function remove(Request $request){
      $user_id=Auth::id();
      $data_id = $request->data_id;

      DB::table('selections')
      ->where('user_id', $user_id)
      ->where('data_id', $data_id)
      ->delete();

      return response()->json(['success' => true]);
   }
	 
}//End_Class
