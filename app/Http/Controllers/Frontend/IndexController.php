<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    public function index()
    {
    	return view('frontend.pages.index_page');
    }
    public function contact_message(Request $request)
    {
    	 $check_validatoin = $request->validate([
            'name'    => 'required',
            'email'    => 'required',
            'message'    => 'required'
        ]);
    	 $data = array(
    	 'name' => $request->name,
    	 'email' => $request->email,
    	 'message' => $request->message
    	 );
    	 $store_massage = DB::table('contacts')->insert($data);

    	 return response()->json($store_massage);
    }
}
