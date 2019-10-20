@extends('admin.admin-master')
@section('title','E-Shopper | Category List') 
@section('custom_css')  

      <link rel="stylesheet" href="{{asset('public/admin/plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('content')  
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    
    <div class="modal-content">
       <div class="modal-header">
          <h5>About Update</h5>  
          </button>
       </div>
       <div class="modal-body">
          <form action="{{url('about-info-update')}}" method="POST">
             @csrf
                <input type="hidden" class="form-control" name="about_id" id="about_id"  value="{{!empty($about_infos->about_id)?$about_infos->about_id:''}}">
             <div class="form-group">
                <label for="about_title" class="col-form-label">About Title</label>
                <input type="text" class="form-control" name="about_title" id="about_title" placeholder="About Title" value="{{!empty($about_infos->about_title)?$about_infos->about_title:''}}">
             </div> 
             <div class="form-group">
                <label for="about_title" class="col-form-label">About Description</label>
               <textarea class="form-control" rows="8" name="about_description">{{!empty($about_infos->about_description)?$about_infos->about_description:''}}</textarea>
             </div> 
            


       </div>
       <div class="modal-footer">
       <button type="submit" class="btn btn-sm btn-warning" name="submit" id="submit">Submit</button> 
       <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button> 
       
       </div> 
       </form>
    </div> 
  </div>
  <div class="col-md-2"></div>
</div>
@endsection
@section('custom_script') 
    @if(Session::has('success'))
        <script>
            Swal.fire('success',"{{Session::get('success') }}",'success');
        </script>
    @endif
    @if(Session::has('error'))
        <script>
             Swal.fire('error',"{{Session::get('error') }}",'error');
        </script>
    @endif 

      <script src="{{asset('public/admin/')}}/plugins/tinymce/tinymce.min.js"></script><!--Summernote js-->
      <script src="{{asset('public/admin/')}}/plugins/summernote/summernote-bs4.min.js"></script>
      <script src="{{asset('public/admin/assets/')}}/pages/form-editors.int.js"></script><!-- App js -->
@endsection
 {{-- <div class="form-group"> 
                  <div class="row">
                     <div class="col-12"> 
                                <textarea id="elm1" name="about_description">
                                
                                </textarea>  
                     </div> 
                  </div> 
                  <div class="row"> 
                   <div class="col-md-12">
                      <h4 class="mt-0 header-title">About Description</h4> 
                    <div class="summernote">  {{$about_infos->about_description}}</div> 
                   </div> 
                  </div> 
             </div>  --}}