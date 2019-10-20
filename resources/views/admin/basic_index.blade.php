@extends('admin.admin-master')
@section('title','E-Shopper | Category List') 
@section('content')  
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    
    <div class="modal-content">
       <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User Update</h5>  
          </button>
       </div>
       <div class="modal-body">
          <form action="{{url('basic-info-update')}}" method="POST" enctype="multipart/form-data">
             @csrf
                <input type="hidden" class="form-control" name="id" id="id"  value="{{!empty($basic_infos->id)?$basic_infos->id:''}}">
             <div class="form-group">
                <label for="user_name" class="col-form-label">User Name</label>
                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name" value="{{!empty($basic_infos->user_name)?$basic_infos->user_name:''}}">
             </div>
             <div class="form-group">
                <label for="user_occupation" class="col-form-label">User Description</label>
                <input type="text" class="form-control" name="user_occupation" id="User_occupation" placeholder="User Occupation" value="{{!empty($basic_infos->user_occupation)?$basic_infos->user_occupation:''}}">
             </div>
             <div class="form-group">
                <label for="user_photo" class="col-form-label">User Photo</label>
                <input type="file"   onchange="readURL(this);"  class="form-control" name="user_photo" id="user_photo">
                <br><img src="{{!empty($basic_infos->user_photo)?$basic_infos->user_photo:''}}" height="55px" width="50px">

                      <img id="blah" src="#" alt="Your Image" />  
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
<script>
  function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                  $('#blah')
                      .attr('src', e.target.result)
                      .width(55)
                      .height(50);
              };

              reader.readAsDataURL(input.files[0]);
          }
      }
</script> 
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
@endsection