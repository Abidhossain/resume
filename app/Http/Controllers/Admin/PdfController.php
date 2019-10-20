<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use PDF;
class PdfController extends Controller
{
      public function index()
    { 
    	$viewer_data = DB::table('contacts')->get();
    	return view('frontend.pages.page',compact('viewer_data'));
    } 
    public function pdf()
    { 
    	$viewer_data = DB::table('contacts')->get();
    	$pdf = PDF::loadView('frontend.pages.page',compact('viewer_data'))->setPaper('a4','portrait'); 
    	return $pdf->stream('resume'.'.pdf');
    }
}
