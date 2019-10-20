<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Model\Basic_info;
class HomeController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }
     // ---------------- Category Insert Method Here ------------------- //

    public function basic_index()
    {
    	$basic_infos = DB::table('basic_infos')->first();
    	return view('admin.basic_index',compact('basic_infos'));
    } 
     // ---------------- Category Insert Method Here ------------------- //

    public function basic_info_update(Request $request)
    {
    	 
       // dd($request->all());
            $count_row = Basic_info::get()->count();
            if($count_row < 1){
                if ($request->user_photo !=''){
                
          $files = $request->file('user_photo'); 
          $extension = $files->getClientOriginalExtension();
          $fileName = str_random(5).".".$extension;
          $folderpath = 'Portfolio/user/';
          $image_url = $folderpath.$fileName;
          $files->move($folderpath , $fileName); 
 

                // update infos with logo//

              $update_infos =  Basic_info::insert([
                  'user_photo'      => $image_url,
                  'user_name'      => $request->user_name,
                  'user_occupation'     => $request->user_occupation, 
                ]);
            if ($update_infos){
              Session::flash('success',"Basic Infrmation Updated !!!");
            return redirect()->back();
            }else{
              Session::flash('error','Opps Something Wrong !!!');
            return redirect()->back();
            } 
            }
            }
            else{

        if ($request->user_photo !=''){
                      $img_url = Basic_info::where('id',$request->id)->first();
                     $image_path = $img_url->user_photo; 
                     if($img_url !='' ){
                        unlink($image_path);
                    }
                  $files = $request->file('user_photo');
                  $extension = $files->getClientOriginalExtension();
                  $fileName = str_random(5).".".$extension;
                  $folderpath = 'Portfolio/user/';
                  $image_url = $folderpath.$fileName;
                  $files->move($folderpath , $fileName);

                  // update infos with logo//

                $update_infos =  Basic_info::where('id', $request->id)
                  ->update([
                  'user_photo'      => $image_url,
                  'user_name'      => $request->user_name,
                  'user_occupation'     => $request->user_occupation, 
                  ]);
              if ($update_infos){
                Session::flash('success',"Basic Infrmation Updated !!!");
              return redirect()->back();
              }else{
                Session::flash('error','Opps Something Wrong !!!');
              return redirect()->back();
              }
              }
              else{
                        // update infos with logo//

                      $update_infos =  Basic_info::where('id', $request->id)
                        ->update([
                        'user_name'      => $request->user_name,
                        'user_occupation'     => $request->user_occupation, 
                        ]);
                    if ($update_infos){
                      Session::flash('success',"Basic Infrmation Updated !!!");
                    return redirect()->back();
                    }else{
                      Session::flash('error','Opps Something Wrong !!!');
                    return redirect()->back();
                    }
                    }
              }  
         } 

    // =========================================================================
    // =================================About Method============================
    // =========================================================================
    public function about_index()
    {
        $about_infos = DB::table('abouts')->first();
        return view('admin.about_index',compact('about_infos'));
    }
    public function about_info_update(Request $request)
    {
         $check_validatoin = $request->validate([
            'about_title'    => 'required',
            'about_description'    => 'required'
        ]); 

        $about_update = DB::table('abouts')->where('about_id',$request->about_id)->update([
            'about_title' => $request->about_title,
            'about_description' => $request->about_description
        ]);
         if ($about_update){
                Session::flash('success',"Infos Updated Completed !!!");
                return redirect()->back();
            }else{
                Session::flash('error','Infos Update Failed !!!');
                return redirect()->back();
            }

    }

    // =========================================================================
    // =======================Testimornial Method============================
    // =========================================================================

     public function testimonial_index()
    {
        return view('admin.testimonial_index');
    }
    public function testimonial_read()
    { 
        $testimonial_infos = DB::table('testimonials')->get();
        return view('admin.testimonial_read',compact('testimonial_infos'));
    }
    public function store_testimonials(Request $request)
    {
          $check_validatoin = $request->validate([
            'testimonial_name'    => 'required',
            'testimonial_brief'    => 'required',
            'testimonial_occopation'    => 'required',
            'testimonial_photo'   => 'image|mimes:jpeg,png,jpg'
        ]);

          $files = $request->file('testimonial_photo'); 
          $extension = $files->getClientOriginalExtension();
          $fileName = str_random(5).".".$extension;
          $folderpath = 'public/Portfolio/testimonials/';
          $image_url = $folderpath.$fileName;
          $files->move($folderpath , $fileName); 
 
         $data=array();
         $data['testimonial_name']     = $request->testimonial_name;
         $data['testimonial_brief']     = $request->testimonial_brief; 
         $data['testimonial_occopation']    =  $request->testimonial_occopation;
         $data['testimonial_photo']    =  $image_url;

             $insert = DB::table('testimonials')->insert($data);
        if ($insert){
            Session::flash('success',"Testimornial Stored Successfully !!!");
            return redirect()->back();
        }else{
            Session::flash('error','Opps Something Wrong !!!');
            return redirect()->back();
        } 
    }


    // =========================================================================
    // =======================Services Method==================================
    // =========================================================================

    public function service_index()
    {
        return view('admin.service_index');
    }

    public function service_read()
    { 
        $service_infos = DB::table('services')->get();
        return view('admin.service_read',compact('service_infos'));
    }
    public function store_services(Request $request)
    {
          $check_validatoin = $request->validate([
            'service_name'    => 'required',
            'service_title'    => 'required',
            'service_description'    => 'required',
            'service_photo'   => 'image|mimes:jpeg,png,jpg'
        ]);

          $files = $request->file('service_photo'); 
          $extension = $files->getClientOriginalExtension();
          $fileName = str_random(5).".".$extension;
          $folderpath = 'public/Portfolio/services/';
          $image_url = $folderpath.$fileName;
          $files->move($folderpath , $fileName); 
 
         $data=array();
         $data['service_name']     = $request->service_name;
         $data['service_title']     = $request->service_title; 
         $data['service_description']    =  $request->service_description;
         $data['service_photo']    =  $image_url;

             $insert = DB::table('services')->insert($data);
        if ($insert){
            Session::flash('success',"Testimornial Stored Successfully !!!");
            return redirect()->back();
        }else{
            Session::flash('error','Opps Something Wrong !!!');
            return redirect()->back();
        } 
    }

     // =========================================================================
    // =======================Projects Method==================================
    // =========================================================================

    public function project_index()
    {
        return view('admin.project_index');
    }

    public function project_read()
    { 
        $project_infos = DB::table('projects')->get();
        return view('admin.project_read',compact('project_infos'));
    }
    public function store_project(Request $request)
    {
          $check_validatoin = $request->validate([
            'project_name'    => 'required',
            'technical_skills'    => 'required', 
            'project_photo'   => 'image|mimes:jpeg,png,jpg'
        ]);

          $files = $request->file('project_photo'); 
          $extension = $files->getClientOriginalExtension();
          $fileName = str_random(5).".".$extension;
          $folderpath = 'public/Portfolio/services/';
          $image_url = $folderpath.$fileName;
          $files->move($folderpath , $fileName); 
 
         $data=array();
         $data['project_name']     = $request->project_name;
         $data['technical_skills']     = $request->technical_skills;  
         $data['project_photo']    =  $image_url;

             $insert = DB::table('projects')->insert($data);
        if ($insert){
            Session::flash('success',"Testimornial Stored Successfully !!!");
            return redirect()->back();
        }else{
            Session::flash('error','Opps Something Wrong !!!');
            return redirect()->back();
        } 
    }

     // =========================================================================
    // ==========================Resume Method==================================
    // =========================================================================
    public function resume_index()
    {
      return view('admin.resume_index');
    }
}
